@extends('layouts.main')

@section('status-vacancy') active
@endsection

@section('content')
<div class="container pt-4">
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="pr-4 pt-4 pl-4">
                    <h5>Profil Perusahaan</h5>
                    <hr>
                </div>
                <div class="card-body mt-n4">
                    @if(empty($company))
                      <form method="POST" action="{{ url('recruiter/profil/store') }}" class="px-1">
                        @csrf
                          <div class="form-group">
                              <label for="">Nama Perusahaan</label>
                              <input type="text" name="name" class="form-control form-control-sm" placeholder="Nama perusahaan">
                          </div>
                          <div class="form-group">
                              <label for="">Alamat</label>
                              <input type="text" name="alamat" class="form-control form-control-sm" placeholder="Alamat perusahaan">
                          </div>
                          <div class="form-group">
                              <label for="">Alamat Website</label>
                              <input type="text" name="website" class="form-control form-control-sm" placeholder="Alamat website resmi">
                          </div>
                          {{-- <div class="form-group">
                              <label for="">Bergerak dibidang</label>
                              <select class="form-control form-control-sm" name="daerah">
                                  <option value="null">Pilih Provinsi</option>
                                  <option value="Banda Aceh">Konstruksi bangunan</option>
                                  <option value="Denpasar">IT Software</option>
                                  <option value="Bengkulu">Firma Hukum</option>
                              </select>
                          </div> --}}
                          {{-- <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Daerah Kerja</label>
                                      <select class="form-control form-control-sm" name="daerah">
                                          <option value="null">Pilih Provinsi</option>
                                          <option value="Banda Aceh">Banda Aceh</option>
                                          <option value="Denpasar">Riau</option>
                                          <option value="Bengkulu">Bali</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Daerah Kerja</label>
                                      <select class="form-control form-control-sm" name="daerah">
                                          <option value="null">Pilih Kota</option>
                                          <option value="Banda Aceh">Banda Aceh</option>
                                          <option value="Denpasar">Denpasar</option>
                                          <option value="Bengkulu">Bengkulu</option>
                                          <option value="Jambi">Jambi</option>
                                      </select>
                                  </div>
                              </div>
                          </div> --}}
                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Foto Profil</label>
                                      <input type="text" class="form-control form-control-sm" name="profil" placeholder="*Dalam angka">
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Foto Sampul</label>
                                      <input type="text" class="form-control form-control-sm" name="sampul" placeholder="*Dalam angka">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="desc">Deskripsi tentang perusahaan anda</label>
                              <textarea name="description" rows="3"></textarea>
                              <script>
                                CKEDITOR.replace( 'description' );
                              </script>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    @else
                      {{-- Update --}}
                      <form method="POST" action="{{ url('recruiter/profil/update') }}" class="px-1">
                        @csrf
                          <div class="form-group">
                              <label for="">Nama Perusahaan</label>
                              <input type="text" name="name" class="form-control form-control-sm" placeholder="Nama perusahaan" value="{{ $company->name }}">
                          </div>
                          <div class="form-group">
                              <label for="">Alamat</label>
                              <input type="text" name="alamat" class="form-control form-control-sm" placeholder="Alamat perusahaan" value="{{ $company->alamat }}">
                          </div>
                          <div class="form-group">
                              <label for="">Alamat Website</label>
                              <input type="text" name="website" class="form-control form-control-sm" placeholder="Alamat website resmi" value="{{ $company->website }}">
                          </div>
                          {{-- <div class="form-group">
                              <label for="">Bergerak dibidang</label>
                              <select class="form-control form-control-sm" name="daerah">
                                  <option value="null">Pilih Provinsi</option>
                                  <option value="Banda Aceh">Konstruksi bangunan</option>
                                  <option value="Denpasar">IT Software</option>
                                  <option value="Bengkulu">Firma Hukum</option>
                              </select>
                          </div> --}}
                          {{-- <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Daerah Kerja</label>
                                      <select class="form-control form-control-sm" name="daerah">
                                          <option value="null">Pilih Provinsi</option>
                                          <option value="Banda Aceh">Banda Aceh</option>
                                          <option value="Denpasar">Riau</option>
                                          <option value="Bengkulu">Bali</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Daerah Kerja</label>
                                      <select class="form-control form-control-sm" name="daerah">
                                          <option value="null">Pilih Kota</option>
                                          <option value="Banda Aceh">Banda Aceh</option>
                                          <option value="Denpasar">Denpasar</option>
                                          <option value="Bengkulu">Bengkulu</option>
                                          <option value="Jambi">Jambi</option>
                                      </select>
                                  </div>
                              </div>
                          </div> --}}
                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Foto Profil</label>
                                      <input type="text" class="form-control form-control-sm" name="profil" placeholder="*Dalam angka" value="{{ $company->profil }}">
                                  </div>
                              </div>
                              <div class="col">
                                  <div class="form-group">
                                      <label for="">Foto Sampul</label>
                                      <input type="text" class="form-control form-control-sm" name="sampul" placeholder="*Dalam angka" value="{{ $company->sampul }}">
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="desc">Deskripsi tentang perusahaan anda</label>
                              <textarea name="description" rows="3">{!! $company->description !!}</textarea>
                              <script>
                                CKEDITOR.replace( 'description' );
                              </script>
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection