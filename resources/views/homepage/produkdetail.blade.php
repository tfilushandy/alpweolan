@extends('layouts.template')
@section('content')
<div class="container" style="margin-top:70px;">
  <div class="row mt-4">
<<<<<<< HEAD
    <div class="col-lg-8">
      <div class="card" style="border-color:linear-gradient(to right, #3354e7, slategray); box-shadow: 5px 6px 6px 2px #e9ecef;">
        <div class="card-header" style="border:none; background:linear-gradient(to right, #3354e7, slategray);">
          <h5>Masukkan UID dan server</h5>
        </div>
        <div class="card-body">
          <div style="display: flex; gap: 20px;">
            <div style="display: flex; flex-direction: column;">
              <label for="uid">UID:</label>
              <input type="text" id="uid" name="uid">
            </div>
            <div style="display: flex; flex-direction: column;">
              <label for="server">Server:</label>
              <input type="text" id="server" name="server">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="row">
        <div class="col">
          <div class="card" style="border:none; background:linear-gradient(to right, #3354e7, slategray); box-shadow: 5px 6px 6px 2px #e9ecef;">
=======
    <div class="col col-lg-8 col-md-8">
      @foreach($itemproduk->images as $index => $image)
      @if($index == 0)
        <img src="{{ \Storage::url($image->foto) }}" class="d-block w-100" alt="..." style="max-height: 750px; width: 100%; box-shadow: 5px 6px 6px 2px #e9ecef;">
      @else
        <img src="{{ asset('images/KOJO 1.png') }}" class="d-block w-100" alt="..." style="max-height: 750px; width: 100%;">
      @endif
      @endforeach
    </div>

<!-- Product -->
    <div class="col col-lg-4 col-md-4">
      <div class="row">
        <div class="col">
          <div class="card" style="border:none; background-color: #ADC178; box-shadow: 5px 6px 6px 2px #e9ecef;">
>>>>>>> 7c082ecb3e24e7d8b8c276259ac21bad84f6f29d
            <div class="card-body card-yellow">
              @if(count($errors) > 0)
              @foreach($errors->all() as $error)
                <div class="alert alert-warning">{{ $error }}</div>
              @endforeach
              @endif
              @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                  <p>{{ $message }}</p>
                </div>
              @endif
              @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
              @endif
              <span class="small">{{ $itemproduk->kategori->nama_kategori }}</span>
              <div class="row">
              <div class="col">
              <h4 class="font-weight-bold">{{ $itemproduk->nama_produk }}</h4>
              </div>
              <!-- cek apakah ada promo -->
              <div class="col">
              @if($itemproduk->promo != null)
              <p>
                Rp. <del>{{ number_format($itemproduk->promo->harga_awal, 2) }}</del>
                <br />
                Rp. {{ number_format($itemproduk->promo->harga_akhir, 2) }}
              </p>
              @else
              <p>
                Rp. {{ number_format($itemproduk->harga, 2) }}
              </p>
              @endif
              </div>
              </div>
              <div class="row mt-4">
              <div class="col">
              <form action="{{ route('wishlist.store') }}" method="post">
                @csrf
                <input type="hidden" name="produk_id" value={{ $itemproduk->id }}>
<<<<<<< HEAD
                <button type="submit" class="btn btn-sm" style="background-color:white">
=======
                <button type="submit" class="btn btn-sm">
>>>>>>> 7c082ecb3e24e7d8b8c276259ac21bad84f6f29d
                @if(isset($itemwishlist) && $itemwishlist)
                  <i class="fas fa-heart"></i> Add to Wishlist
                @else
                  <i class="far fa-heart"></i> Add to Wishlist
                @endif
                </button>
              </form>
              </div>
              <div class="col" style="margin-top: -5px">
              <form action="{{ route('cartdetail.store') }}" method="POST">
                @csrf
                <input type="hidden" name="produk_id" value={{$itemproduk->id}}>
<<<<<<< HEAD
                <button class="btn btn-sm" type="submit" style="margin-top:5px;  background-color: white;">
=======
                <button class="btn btn-sm" type="submit" style="margin-top:5px;">
>>>>>>> 7c082ecb3e24e7d8b8c276259ac21bad84f6f29d
                  <i class="fa fa-shopping-cart"></i> Add to Cart
                  </button>
              </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<<<<<<< HEAD
      <!-- Description -->
      <div class="row mt-4">
        <div class="col">
          <div class="card" style="border-color:linear-gradient(to right, #3354e7, slategray); box-shadow: 5px 6px 6px 2px #e9ecef;">
            <div class="card-header" style="border:none; background:linear-gradient(to right, #3354e7, slategray);">
=======
<!-- Description -->
      <div class="row mt-4">
        <div class="col">
          <div class="card" style="border-color:#ADC178; box-shadow: 5px 6px 6px 2px #e9ecef;">
            <div class="card-header" style="border:none; background-color: #ADC178;">
>>>>>>> 7c082ecb3e24e7d8b8c276259ac21bad84f6f29d
              <h5>Description</h5>
            </div>
            <div class="card-body">
              {{ $itemproduk->deskripsi_produk }}
            </div>
          </div>
        </div>
      </div>
<<<<<<< HEAD
      
      <!-- Comment -->
      <div class="row mt-4">
        <div class="col">
          <div class="card" style="border-color:linear-gradient(to right, #3354e7, slategray); box-shadow: 5px 6px 6px 2px #e9ecef;">
            <div class="card-header" style="border:none; background:linear-gradient(to right, #3354e7, slategray);">
=======


<!-- Comment -->
      <div class="row mt-4">
        <div class="col">
          <div class="card" style="border-color:#ADC178; box-shadow: 5px 6px 6px 2px #e9ecef;">
            <div class="card-header" style="border:none; background-color: #ADC178;">
>>>>>>> 7c082ecb3e24e7d8b8c276259ac21bad84f6f29d
              <h5>Add Review</h5>
            </div>
            <div class="card-body">
              <form method="post" action="{{ route('comments.store') }}">
              @csrf
              <div class="form-group">
                <div class="rating" style="margin-left: 5px">
                  <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                  <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> 
                  <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                  <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                  <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                  <img src="{{ asset('img/user1-128x128.jpg') }}" style="max-height: 40px;max-width: 40px;" class="user-img rounded-circle mr-2">
                </div>
              </div>
                <div class="form-group">
                  <textarea class="form-control" name="body"></textarea>
                  <input type="hidden" name="produk_id" value="{{ $itemproduk->id }}" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn-sm btn-outline-info py-0" style="font-size: 0.8em;" value="Submit" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<<<<<<< HEAD
  <!-- DisplayComment -->
  <div class="row mt-4">
    <div class="col">
      <div class="card" style="border-color:linear-gradient(to right, #3354e7, slategray); box-shadow: 5px 6px 6px 2px #e9ecef;">
        <div class="card-header" style="border:none; background:linear-gradient(to right, #3354e7, slategray);">
=======
<!-- DisplayComment -->
  <div class="row mt-4">
    <div class="col">
      <div class="card" style="border-color:#ADC178; box-shadow: 5px 6px 6px 2px #e9ecef;">
        <div class="card-header" style="border:none; background-color: #ADC178;">
>>>>>>> 7c082ecb3e24e7d8b8c276259ac21bad84f6f29d
          <h5>Display Comment</h5>
        </div>
        <div class="card-body">
        @include('homepage.commentsDisplay', ['comments' => $itemproduk->comments, 'produk_id' => $itemproduk->id])
        </div>
      </div>
    </div>
  </div>
</div>
@endsection