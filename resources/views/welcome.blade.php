@extends('layouts.main')
@section('headerfile')
@endsection

@section('content')

<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="lnr-map text-info"></i>
                                    </div>
                                    <div>
                                        Forms Wizard
                                        <div class="page-title-subheading">
                                            Easily create beautiful form multi step wizards!
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <div id="smartwizard">
                                                    <ul class="forms-wizard">
                                                        <li>
                                                            <a href="#step-1">
                                                                <em>1</em>
                                                                <span>Account Information</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-2">
                                                                <em>2</em>
                                                                <span>Warehouse Registration</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-3">
                                                                <em>3</em>
                                                                <span>Warehouse Registration</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-4">
                                                                <em>4</em>
                                                                <span>Warehouse Add Ons</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-5">
                                                                <em>5</em>
                                                                <span>Value Added Services</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#step-6">
                                                                <em>5</em>
                                                                <span>Submission Confirmation</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="form-wizard-content">

                                                        <div id="step-1">
                                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                                <div class="card">
                                                                    <div id="headingOne" class="card-header">
                                                                        <div class="d-grid">
                                                                            <button type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne"
                                                                                aria-expanded="false" aria-controls="collapseOne"
                                                                                class="text-start m-0 p-0 btn btn-link">
                                                                                <span class="form-heading">Account Information
                                                                                    <p>Enter your user informations below</p>
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseOne"
                                                                        aria-labelledby="headingOne" class="collapse show">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleEmail2">Email</label>
                                                                                        <input name="email" id="exampleEmail2"
                                                                                            placeholder="with a placeholder"
                                                                                            type="email" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="examplePassword">Password</label>
                                                                                        <input name="password" id="examplePassword"
                                                                                            placeholder="password placeholder"
                                                                                            type="password" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress">Address</label>
                                                                                <input name="address" id="exampleAddress"
                                                                                    placeholder="1234 Main St"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress2">Address 2</label>
                                                                                <input name="address2" id="exampleAddress2"
                                                                                    placeholder="Apartment, studio, or floor"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleCity">City</label>
                                                                                        <input name="city" id="exampleCity"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleState">State</label>
                                                                                        <input name="state" id="exampleState"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleZip">Zip</label>
                                                                                        <input name="zip" id="exampleZip"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                        <div id="step-2">
                                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                                <div class="card">
                                                                    <div id="headingOne" class="card-header">
                                                                        <div class="d-grid">
                                                                            <button type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne"
                                                                                aria-expanded="false" aria-controls="collapseOne"
                                                                                class="text-start m-0 p-0 btn btn-link">
                                                                                <span class="form-heading">Account Information
                                                                                    <p>Enter your user informations below</p>
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseOne"
                                                                        aria-labelledby="headingOne" class="collapse show">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleEmail2">Email</label>
                                                                                        <input name="email" id="exampleEmail2"
                                                                                            placeholder="with a placeholder"
                                                                                            type="email" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="examplePassword">Password</label>
                                                                                        <input name="password" id="examplePassword"
                                                                                            placeholder="password placeholder"
                                                                                            type="password" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress">Address</label>
                                                                                <input name="address" id="exampleAddress"
                                                                                    placeholder="1234 Main St"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress2">Address 2</label>
                                                                                <input name="address2" id="exampleAddress2"
                                                                                    placeholder="Apartment, studio, or floor"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleCity">City</label>
                                                                                        <input name="city" id="exampleCity"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleState">State</label>
                                                                                        <input name="state" id="exampleState"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleZip">Zip</label>
                                                                                        <input name="zip" id="exampleZip"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="step-3">
                                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                                <div class="card">
                                                                    <div id="headingOne" class="card-header">
                                                                        <div class="d-grid">
                                                                            <button type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne"
                                                                                aria-expanded="false" aria-controls="collapseOne"
                                                                                class="text-start m-0 p-0 btn btn-link">
                                                                                <span class="form-heading">Account Information
                                                                                    <p>Enter your user informations below</p>
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseOne"
                                                                        aria-labelledby="headingOne" class="collapse show">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleEmail2">Email</label>
                                                                                        <input name="email" id="exampleEmail2"
                                                                                            placeholder="with a placeholder"
                                                                                            type="email" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="examplePassword">Password</label>
                                                                                        <input name="password" id="examplePassword"
                                                                                            placeholder="password placeholder"
                                                                                            type="password" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress">Address</label>
                                                                                <input name="address" id="exampleAddress"
                                                                                    placeholder="1234 Main St"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress2">Address 2</label>
                                                                                <input name="address2" id="exampleAddress2"
                                                                                    placeholder="Apartment, studio, or floor"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleCity">City</label>
                                                                                        <input name="city" id="exampleCity"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleState">State</label>
                                                                                        <input name="state" id="exampleState"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleZip">Zip</label>
                                                                                        <input name="zip" id="exampleZip"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="step-4">
                                                            <div id="accordion" class="accordion-wrapper mb-3">
                                                                <div class="card">
                                                                    <div id="headingOne" class="card-header">
                                                                        <div class="d-grid">
                                                                            <button type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#collapseOne"
                                                                                aria-expanded="false" aria-controls="collapseOne"
                                                                                class="text-start m-0 p-0 btn btn-link">
                                                                                <span class="form-heading">Account Information
                                                                                    <p>Enter your user informations below</p>
                                                                                </span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                    <div data-parent="#accordion" id="collapseOne"
                                                                        aria-labelledby="headingOne" class="collapse show">
                                                                        <div class="card-body">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleEmail2">Email</label>
                                                                                        <input name="email" id="exampleEmail2"
                                                                                            placeholder="with a placeholder"
                                                                                            type="email" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="examplePassword">Password</label>
                                                                                        <input name="password" id="examplePassword"
                                                                                            placeholder="password placeholder"
                                                                                            type="password" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress">Address</label>
                                                                                <input name="address" id="exampleAddress"
                                                                                    placeholder="1234 Main St"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="position-relative mb-3">
                                                                                <label class="form-label" for="exampleAddress2">Address 2</label>
                                                                                <input name="address2" id="exampleAddress2"
                                                                                    placeholder="Apartment, studio, or floor"
                                                                                    type="text" class="form-control">
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleCity">City</label>
                                                                                        <input name="city" id="exampleCity"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleState">State</label>
                                                                                        <input name="state" id="exampleState"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2">
                                                                                    <div class="position-relative mb-3">
                                                                                        <label class="form-label" for="exampleZip">Zip</label>
                                                                                        <input name="zip" id="exampleZip"
                                                                                            type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div id="step-5">
                                                            <div class="no-results">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle mt-4">Finished!</div>
                                                                <div class="results-title">You arrived at the last form wizard step!</div>
                                                                <div class="mt-3 mb-3"></div>
                                                                <div class="text-center">
                                                                    <button class="btn-shadow btn-wide btn btn-success btn-lg">Finish</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="clearfix">
                                                    <button type="button" id="reset-btn" class="btn-shadow float-start btn btn-link">Reset</button>
                                                    <button type="button" id="next-btn" class="btn-shadow btn-wide float-end btn-pill btn-hover-shine btn btn-primary">Next</button>
                                                    <button type="button" id="prev-btn" class="btn-shadow float-end btn-wide btn-pill me-3 btn btn-outline-secondary">Previous</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            
                        </div>
                    </div>


@endsection