<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
</head>
<body>
@include('admin.header')
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <div>
                    <h1>Update Book</h1>

                    <form>

                        <div>
                            <label>Book title</label>
                            <input type="text" name="title" value="{{$data->title}}">
                        </div>

                        <div>
                            <label>Auther Name</label>
                            <input type="text" name="auther_name" value="{{$data->auther_name}}">
                        </div>

                        <div>
                            <label>Price</label>
                            <input type="text" name="price" value="{{$data->price}}">
                        </div>

                        <div>
                            <label>Quantity</label>
                            <input type="text" name="quantity" value="{{$data->quantity}}">
                        </div>

                        <div>
                            <label>Description</label>
                            <textarea name="desceription">{{$data->description}}</textarea>
                        </div>

                        <div>
                            <label>Category</label>

                            <select>

                                <option value="$data->category_id">{{$data->category->cat_title}}</option>
                                @foreach($category as $category)


                                <option value="{{$category->id}}">{{$category->cat_title}}</option>

                                @endforeach
                            </select>

                            <div>
                                <label>Current auther Image</label>
                                <img style="width: 80px; border-radius: 50%" src="/auther/{{$data->auther_img}}">
                            </div>

                            <div>
                                <label>Current book Image</label>
                                <img style="width: 80px;" src="/book/{{$data->book_img}}">
                            </div>


                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



@include('admin.footer')
</body>
</html>
