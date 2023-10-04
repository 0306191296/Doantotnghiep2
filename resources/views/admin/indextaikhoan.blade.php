@include('admin.head')
<div class="page-container">
@include('admin.sidebar')

<div class="main-content">
            <!-- header area start -->
            @include('admin.headerarea')
            <div class="main-content-inner">           
                            <!-- Textual inputs start -->
                          
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- <h4 class="header-title">Danh sách phiếu bảo hành</h4> --}}
                                        @if (session('message'))
                                            <span class ="aler alert-safe">
                                            <strong> {{session('message')}}</strong>
                                            </span>
                                            @endif
                                        @include('alert')                                  
                                            </head>
                                            <body>                   
                                            <h3>Danh sách tài khoản</h3>                                        
                                            <table>        
                                              <tr>
                                                <th>ID</th>
                                                <th>Tài khoản</th>
                                                <th>Họ tên</th>
                                                <th>Email</th>
                                                <th>Mật khẩu</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                           
                                                <th>Loại tài khoản</th>
                                                <th>Chức năng</th>
                                              </tr>
                                              @foreach ($taikhoan as $product)
                                               <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->taikhoan}}</td>
                                                <td>{{$product->hoten}}</td>
                                                <td>{{$product->email}}</td>
                                                <td  class="ellipsis" >{{$product->matkhau}}</td>
                                                <td>{{$product->sdt}}</td>
                                                <td>{{$product->diachi}}</td>
                                                
                                                {{-- <td>a</td> --}}
                                                <td>{{$product->loaitk}}</td>
                                                <td>
                                                   
                                                    <form method="POST" action="
                                                    {{-- {{ route('admin.indexbaohanh.destroy', $product->id) }} --}}
                                                    " style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                    
                                                   
                                                    <button class="button button2" type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Xóa</button>
                                                </form>
                                                </td>

                                              </tr>
                                              @endforeach
                                            </table>
                                           
                                            <style>
                                              .ellipsis {
                                                    max-width: 100px;
                                                    white-space: nowrap;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;     
                                                  }
                                                .button {
                                                  border: none;
                                                  color: white;
                                                  padding: 10px 20px;
                                                  text-align: center;
                                                  text-decoration: none;
                                                  display: inline-block;
                                                  font-size: 13px;
                                                  margin: 2px 1px;
                                                  transition-duration: 0.4s;
                                                  cursor: pointer;
                                                }
                                                
                                                .button1 {
                                                  background-color: white; 
                                                  color: black; 
                                                  border: 2px solid #4CAF50;
                                                }
                                                
                                                .button1:hover {
                                                  background-color: #4CAF50;
                                                  color: white;
                                                }
                                                
                                                .button2 {
                                                  background-color: white; 
                                                  color: black; 
                                                  border: 2px solid #ff0000;
                                                }
                                                
                                                .button2:hover {
                                                  background-color: #ff0000;
                                                  color: white;
                                                }
                                                
                                            </style>
                                            <style>
                                                table {
                                                  font-family: arial, sans-serif;
                                                  border-collapse: collapse;
                                                  width: 100%;
                                                }
                                                
                                                td, th {
                                                  border: 1px solid #dddddd;
                                                  text-align: left;
                                                  padding: 8px;
                                                }
                                                
                                                tr:nth-child(even) {
                                                  background-color: #dddddd;
                                                }
                                                </style>
                                            
                                       
                                    </div>
                                </div>
                            </div>
                          
                          
                        </div>
            </div>
        </div>
    </div>
    @include('admin.script')