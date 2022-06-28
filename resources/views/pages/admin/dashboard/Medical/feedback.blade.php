@extends('layouts.admin.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
			  <form >
				 <div class="col-12">
					<label class="form-label">بريد الالكتروني</label>
					<input type="email" class="form-control" name="email" >
				</div>
				   <div class="col-12">
					<label class="form-label">Question</label>
					   <textarea class="form-control"  id="question" name="question" name="question"></textarea>
				</div>
			  </form>
			<button type="submit" class="btn btn-primary btn-submit">إرسال</button>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit").click(function(e){
        e.preventDefault();
		var question = $('textarea#question').val();
        var email = $("input[name=email]").val();
        $.ajax({
           type:'POST',
           url:"{{ route('feedbackStore') }}",
           data:{ question:question, email:email},
           success:function(data){
             console.log("successful send");
           }
        });
  
    });
</script>
@endpush