
<!DOCTYPE html>
<html lang="en">
<head>
  <title>A & A DAILY ATTENDENCE
</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="admin/img/logo.jpg"><link rel="icon" type="image/x-icon" href="admin/img/logo.jpg">
  <link href="registration.css" rel="stylesheet">
  <link href="admin/css/responsive.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
<section class="attendancebg ">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
    <h1 class="headertitle text-center text-white mb-5">A & A Daily Attendance</h1>
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
             <x-app-layout>
                </x-app-layout>
                {{-- @include('sweetalert::alert') --}}
            <form action="/attendance" method="POST" class="attendance_form">
            @csrf
              <div class="row">
<!-- error  -->
@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif
        <!-- Way 1: Display All Error Messages -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong> Please fill out all required fields!</strong>
            </div>
        @endif
              <!-- name start -->
                <div class="col-md-12 mb-4">
                  <div class="form-outline">
                  <label class="form-label" for="firstName">Full Name :</label>
                    <input type="text" id="firstName" name="fullname"  value="{{old('fullname')}}" class="form-control form-control-lg  @error('fullname') is-invalid @enderror" />
                    @error('fullname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                </div>
                <!-- employees number start -->
                <div class="col-md-12 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="employee_number">Employee Number :</label>
                    <input type="number" id="employee_number" name="employee_number" value="{{old('employee_number')}}"  class="form-control form-control-lg  @error('employee_number') is-invalid @enderror" />
                    @error('employee_number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                </div>
             </div>
            <!-- address  start -->
         <!-- address start -->
   <div class="row">
             <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="address">Address :</label>
                                <input type="text" id="address" name="address" value="{{old('address')}}" class="form-control form-control-lg  @error('address') is-invalid @enderror" />
                                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                          @enderror
                            </div>
                     </div>
                  </div>
              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="phoneNumber">Phone Number :</label>
                    <input type="number" id="phoneNumber" name="phoneNumber" value="{{old('phoneNumber')}}" class="form-control form-control-lg  @error('phoneNumber') is-invalid @enderror" />
                    @error('phoneNumber')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                      <div class="form-outline">
                            <label class="form-label " for="day">Day :</label>  <br>
                            <select  class="form-select @error('day') is-invalid @enderror" id="day" name="day">
                    <option value="Choose option" selected disabled>Choose option</option>
                    <option value="Saturday" value=" day">Saturday</option>
                    <option value="Sunday" value="{{old('day')}}">Sunday</option>
                    <option value="Monday" value="{{old('Monday')}}">Monday</option>
                    <option value="Tuesday" value="{{old('Tuesday')}}">Tuesday</option>
                    <option value="Wednesday" value="{{old('Wednesday')}}">Wednesday</option>
                    <option value="Thursday" value="{{old('Thursday')}}">Thursday</option>
                    <option value="Friday" value="{{old('daFridayy')}}">Friday</option>
                  </select>
                           @error('day')
                                    <div class="invalid-feedback">{{$message}}</div>
                              @enderror
                      </div>
                     </div>
              </div>
            <!-- end phone email -->
           <!-- date time row start -->
           <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="date">Date :</label>
                    <input type="date" id="date" value="{{old('date')}}" name="date" class="form-control form-control-lg  @error('date') is-invalid @enderror" />
                    @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                </div>
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="time">Time:</label>
                    <input type="time" id="time" name="time" value="{{old('time')}}" class="form-control form-control-lg  @error('time') is-invalid @enderror" />
                    @error('time')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                </div>
              </div>
      <!--  date time  Expenses row end -->
      <!--  customer feedback start -->
      <div class="row">
              <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="cus_feedback">Feedback from the Customer :</label>
                                  <input type="text" id="cus_feedback" value="{{old('cus_feedback')}}"  name="cus_feedback" class="form-control form-control-lg  @error('cus_feedback') is-invalid @enderror" />
                                  @error('cus_feedback')
                    <span class="text-danger">{{ $message }}</span>
                            @enderror
                                </div>
                        </div>
              </div>
      <!-- customer feedback end -->
               <!--  Expenses  row start -->
             <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="expenses">Expenses :</label>
                    <input type="number" id="expenses" name ="expenses" value="{{old('expenses')}}" class="form-control form-control-lg  @error('expenses') is-invalid @enderror" />
                    @error('expenses')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                </div>

                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                  <label class="form-label" for="express_details">Expenses  Description :</label>
                    <input type="text" id="express_details"  value="{{old('express_details')}}"  name="express_details" class="form-control form-control-lg  @error('express_details') is-invalid @enderror" />
                    @error('express_details')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                  </div>
                </div>
              </div>

      <!-- customer feedback Expenses row end -->
      <!-- comment start -->
        <div class="row">
              <div class="col-md-12 mb-4 pb-2">
                            <div class="form-outline">
                            <label class="form-label" for="comment">Comments :</label>
                                  <input type="text" id="comment" name="comment" class="form-control form-control-lg " />
                            </div>
                            </div>
                                     </div>
      <!-- comment end -->
              <div class="mt-4 pt-2 submitbutton">
                <input class="btn btn-primary btn-lg bg-primary text-white" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
