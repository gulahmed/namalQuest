@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
      @include('applicant.navigation')
    </div>
    <div class="col-md-9">
      @if (session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if (session('message'))
      <div class="alert alert-info">{{ session('message') }}</div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="card content-card">
        <div class="card-body">
          <h3>Education</h3>
          <div class="table-responsive">
            <table class="table table-sm">
              <thead><tr>
                  <th>Institution</th>
                  <th>Qualification</th>
                  <th>Year Completed</th>
                  <th>Result</th>
                  <th class="fit">Action</th>
                </tr></thead>
                <tbody>
                  <tr><td>Some Institute</td>
                    <td>some qualification</td>
                    <td>Passing Year</td>
                    <td>Pass</td>
                    <td class="fit">
                    <form action="" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" >
                        <input type="submit" class="btn btn-danger btn-sm" value="Remove" >
                      </form>
                    </td></tr>

                </tbody>
            </table><br/>

          </div>
          @include('applicant.partials._education_form')

					<span class="i-need-space"></span>
					<a href="{{ url('apply/programs') }}" class="btn btn-primary">Next</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
