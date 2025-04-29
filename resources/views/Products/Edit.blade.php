@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 700px;">
                <div class="card-header" style="background-color: rgb(100, 0, 38);">
                    <h3 class="text-white">تحرير المنتج</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.update')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$products->id}}">
                        <div class="row">
                            <div class="col">
                                <label class="form-label">اسم المنتج</label>
                                <input type="text" class="form-control" name="name" value="{{$products->name}}">
                              
                            </div>
                            <div class="col">
                                <label class="form-label">وصف المنتج</label>
                                <input type="text" class="form-control" name="description" value="{{$products->description}}">
                         
                            </div>

                            <div class="col">
                                <label class="form-label">سعر المنتج</label>
                                <input type="number" class="form-control" name="price" value="{{$products->price}}">
                         
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">الكمية المخزنية </label>
                                <input type="number" class="form-control" name="stoke" value="{{$products->stoke}}">
                         
                            </div>
                            <div class="col">
                                <label class="form-label">رقم الفئة</label>
                                <input type="text" class="form-control" name="categories_id" value="{{$products->categories_id}}">
                         
                            </div>
                            <div class="col">
                                <label class="form-label">صورة المنتج </label>
                                <input type="file" class="form-control" name="image" value="{{$products->image}}">
                         
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary">حفظ</button>
                            </div>
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection