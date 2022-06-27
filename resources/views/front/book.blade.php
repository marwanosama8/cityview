@extends('layouts.master')
@section('content')


    <!-- start bg-home-img -->
    <section class="bg-Book-Pag">
        <div class="container">
          <div class="text-home-bg">
            <h1>BOOK</h1>
          </div>
        </div>
        <div class="logo-down">
          <a href="#sec-form-book" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
          </a>
        </div>
      </section>
      <!-- end bg-home-img -->
  
      <!-- start form check book page -->
      <section id="sec-form-book" class="form-check-in-book">
        <div class="container">
          <div class="div-form-check">
            <form action="">
              <div class="div-input">
                <label for="">Check-in</label>
                <input
                  class="date"
                  required
                  style="width: 100%"
                  type="date"
                  data-date=""
                  data-date-format="DD MMMM YYYY"
                  value="2022-01-01"
                />
              </div>
              <div class="div-input">
                <label for="">Check-out</label>
                <input
                  class="date"
                  required
                  style="width: 100%"
                  type="date"
                  data-date=""
                  data-date-format="DD MMMM YYYY"
                  value="2022-01-01"
                />
              </div>
              <div class="div-input div-select">
                <label for="">Adults</label>
                <select name="" id="" required>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                </select>
              </div>
              <div class="div-input div-select">
                <label for="">Children</label>
                <select name="" id="" required>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                </select>
              </div>
              <a href="{{ route('send.register') }}"> Check </a>
            </form>
          </div>
        </div>
      </section>
      <!-- end form check book page -->

@endsection