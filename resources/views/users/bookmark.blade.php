@extends('layouts.main')

@section('content')
<div class="container pt-5">
    <div class="row mb-2">
        @include('layouts.users-nav')
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <div class="card-header bg-c-donker">
                                <div class="lead">
                                  Bookmark
                                </div>
                            </div>
                            <div class="row mt-4">
                              <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">IT Consultant</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Rp. 1.000.000 - 2.000.000</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="float-right">
                                          <a href="#" class="card-link">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                          <a href="#" class="card-link">
                                            <i class="fa fa-share-alt"></i>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="float-right">
                                          <a href="#" class="card-link">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                          <a href="#" class="card-link">
                                            <i class="fa fa-share-alt"></i>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <div class="float-right">
                                          <a href="#" class="card-link">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                          <a href="#" class="card-link">
                                            <i class="fa fa-share-alt"></i>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <nav aria-label="Page navigation">
                              <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                              </ul>
                            </nav>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
