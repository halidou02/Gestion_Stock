@extends('layouts/layoutMaster')

@section('title', 'BlockUI - Extended UI')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/spinkit/spinkit.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/block-ui/block-ui.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/extended-ui-blockui.js'
])
@endsection

@section('content')

<!-- Block UI -->
<div class="row">
  <!-- Block Ui Section-->
  <div class="col-xl-6 col-12">
    <div class="card mb-6">
      <h5 class="card-header">Basic Examples</h5>
      <div class="card-body">
        <div class="border p-4" id="section-block">
          <p>
            Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis
            neglegentur ut, oporteat salutandi dignissim at mea. Pericula
            erroribus quaerendum ex duo, his autem accusamus ad, alienum
            detracto rationibus vis et. No est volumus ocurreret vituperata.
          </p>
        </div>
        <div class="demo-inline-spacing">
          <button class="btn btn-primary btn-section-block">
            Default
          </button>
          <button class="btn btn-primary btn-section-block-overlay">
            Overlay Color
          </button>
          <button class="btn btn-primary btn-section-block-spinner">
            Custom Spinner
          </button>
          <button class="btn btn-primary btn-section-block-custom">
            Custom Message
          </button>
          <button class="btn btn-primary btn-section-block-multiple">
            Multiple Message
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Block Ui Section-->
  <!-- Block Ui Card-->
  <div class="col-xl-6 col-12">
    <div class="card mb-6" id="card-block">
      <h5 class="card-header">Card Blocking</h5>
      <div class="card-body">
        <p class="card-text">
          Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis
          neglegentur ut, oporteat salutandi dignissim at mea. Pericula
          erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto
          rationibus vis et. No est volumus ocurreret vituperata.
        </p>
        <p class="card-text">
          Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis
          neglegentur ut, oporteat salutandi dignissim
        </p>
        <div class="block-ui-btn demo-inline-spacing">
          <button class="btn btn-primary btn-card-block">
            Default
          </button>
          <button class="btn btn-primary btn-card-block-overlay">
            Overlay Color
          </button>
          <button class="btn btn-primary btn-card-block-spinner">
            Custom Spinner
          </button>
          <button class="btn btn-primary btn-card-block-custom">
            Custom Message
          </button>
          <button class="btn btn-primary btn-card-block-multiple">
            Multiple Message
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Block Ui Card-->
  <!-- /Block Ui Page-->
  <div class="col-xl-6 col-12">
    <div class="card mb-6" id="page-block">
      <h5 class="card-header">Page Blocking</h5>
      <div class="card-body">
        <p class="card-text">
          Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis
          neglegentur ut, oporteat salutandi dignissim at mea. Pericula
          erroribus quaerendum ex duo, his autem accusamus ad, alienum detracto
          rationibus vis et. No est volumus ocurreret vituperata.
        </p>
        <p class="card-text">
          Lorem ipsum dolor sit amet, an vel affert soleat possim. Usu meis
          neglegentur ut, oporteat salutandi dignissim
        </p>
        <div class="block-ui-btn demo-inline-spacing">
          <button class="btn btn-primary btn-page-block">
            Default
          </button>
          <button class="btn btn-primary btn-page-block-overlay">
            Overlay Color
          </button>
          <button class="btn btn-primary btn-page-block-spinner">
            Custom Spinner
          </button>
          <button class="btn btn-primary btn-page-block-custom">
            Custom Message
          </button>
          <button class="btn btn-primary btn-page-block-multiple">
            Multiple Message
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Block Ui Page-->
  <!-- /Block Ui Form-->
  <div class="col-xl-6 col-12">
    <div class="card">
      <h5 class="card-header">Form Block</h5>
      <div class="card-body">
        <div class="p-2 form-block">
          <div class="mb-4">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" id="username" placeholder="username" />
          </div>
          <div class="mb-4">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" placeholder="Email" />
          </div>
          <div class="mb-4">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" id="password" placeholder="Password" />
          </div>
          <div class="mb-4 text-end">
            <button class="btn btn-primary disabled me-sm-4 me-2">Submit</button>
            <button class="btn btn-label-secondary disabled">Reset</button>
          </div>
        </div>
        <div class="block-ui-btn demo-inline-spacing">
          <button class="btn btn-primary btn-form-block">
            Default
          </button>
          <button class="btn btn-primary btn-form-block-overlay">
            Overlay Color
          </button>
          <button class="btn btn-primary btn-form-block-spinner">
            Custom Spinner
          </button>
          <button class="btn btn-primary btn-form-block-custom">
            Custom Message
          </button>
          <button class="btn btn-primary btn-form-block-multiple">
            Multiple Message
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Block Ui Forms-->
</div>
<!-- /Block UI -->
@endsection
