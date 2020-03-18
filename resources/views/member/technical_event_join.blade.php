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
                        <h4 class="card-title">Join the Event</h4>
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

                    <form action="{{route('member.event.submit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="event_id" value="{{ request()->route('id') }}">
                        <div class="form-group">
                            <input type="text" value="{{old('paper_title')}}" name="paper_title" placeholder="Enter Paper Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{old('author_affiliation')}}" name="author_affiliation" placeholder="Enter Author Affiliation" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{old('corresponding_email')}}" name="corresponding_email" placeholder="Enter Corresponding Email" class="form-control">
                        </div>
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
                                <input type="file" name="bank_check" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose Bank Check Image</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="abstract_doc_file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose abstract doc file</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="presentation_ppt_file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose presentation ppt file</label>
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
