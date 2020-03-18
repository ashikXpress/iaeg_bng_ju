@extends('layouts.member')
@section('content')
    <div class="row">
        @include('layouts.assets.message')
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Join Membership</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    @if (count($errors) > 0)

                        <div class="alert alert-danger">


                            <p><strong>Whoops!</strong><br> There were some problems with your input.</p>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif

                    <form action="{{route('member.join.submit')}}" method="post" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group" id="payment_method">
                            <select name="payment_method" class="form-control" id="payment_method_select">
                                <option value="">Select Payment Method</option>
                                <option value="bkash" {{ old('payment_method') == 'bkash' ? 'selected' : '' }}>Bkash</option>
                                <option value="rocket" {{ old('payment_method') == 'rocket' ? 'selected' : '' }}>Rocket</option>
                                <option value="bank" {{ old('payment_method') == 'bank' ? 'selected' : '' }}>Bank</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="amount" value="{{old('amount')}}" placeholder="Enter Amount"  class="form-control">
                        </div>
                        <div class="form-group" id="trx_id">
                            <input type="text" name="TrxID" value="{{old('TrxID')}}" placeholder="Enter TrxID"  class="form-control">
                        </div>
                        <div class="form-group" id="bank_cheque">
                            <div class="custom-file">
                                <input type="file" name="bank_cheque" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose Bank Cheque Image</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('member.dashboard')}}" class="btn iq-bg-danger">cancel</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('additionalJS')
    <script>
        $("#payment_method").change(function () {
            var val = $('#payment_method_select').val();

            if (val == 'bkash' || val == 'rocket') {
                $('#trx_id').show();
                $('#bank_cheque').hide();
            } else if (val == 'bank') {
                $('#trx_id').hide();
                $('#bank_cheque').show();
            } else {
                $('#trx_id').hide();
                $('#bank_cheque').hide();
            }
        });

        $("#payment_method").trigger('change');
    </script>
@endsection
