@extends('customer/master')
@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8">
		    <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackModal">
              Launch demo modal
            </button>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="feedbackModalLabel">Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="/feedback" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <input id="Full Name" name="name" placeholder="Full Name" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                  </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input id="Mobile No." name="phone" placeholder="Mobile No." class="form-control" required="required" type="text">
                    </div>
                    <div class="form-group col-md-6">
                              <input id="location" name="location" placeholder="Location" class="form-control" required="required" type="text">
                    </div>
                    <div class="form-group col-md-12">
                              <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            I agree to <a href="#">Terms and Conditions</a>
                          </label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
@endsection

<!------ Include the above in your HEAD tag ---------->















