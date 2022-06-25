@extends('nhanvien.layout.nhanvien')
@section('content')
<div class="contact-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>Đăng ký Tour</h2>
                </div>
            </div>
        </div>
        @isset($tourInfo)
        <form action="#">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-5"><p>Mã Tour:</p></div>
                    <div class="col-4"></div>
                    <div class="tentaikhoan d-flex justify-content-center">
                        <input readonly type="text" placeholder="" value="{{ $tourInfo->id }}">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-5"><p>Tên Tour:</p></div>
                    <div class="col-4"></div>
                    <div class="tentaikhoan d-flex justify-content-center">
                        <input readonly type="text" placeholder="" value="{{ $tourInfo->name }}">
                    </div>

                    <div class="col-3"></div>
                    <div class="col-5"><p>Số Ghế Còn Lại:</p></div>
                    <div class="col-4"></div>
                    <div class="password d-flex justify-content-center">
                        <input readonly type="text" placeholder="" value="{{ $emptySlotRemain }}">
                    </div> 

                    <div class="col-3"></div>
                    <div class="col-5"><p>Đơn Giá:</p></div>
                    <div class="col-4"></div>
                    <div class="tentaikhoan d-flex justify-content-center">
                        <input readonly type="text" placeholder="" value="{{ number_format($tourInfo->price, 0, '', '.') }} VNĐ">
                    </div>
                </div>
            </div>
        </form>
        @endisset
            <div id="demo" class="collapse">
                <div class="row">             
                    <div class="col-lg-12">
                        <div class="contact__form__title" style="margin-top: 10px; margin-bottom: 20px;">
                            <h2>Thêm Thành Viên</h2>
                        </div>
                            <input type="hidden" name="id[]" value="0">
                            <div class="d-flex justify-content-center">
                                <span class="border" style="width:60%">
                                    <div class="row" style="margin-top: 10px">
                                        <div class="col-3"></div>
                                        <div class="col-7"></div>
                                        <div class="col-2">
                                            <button id = "hide" type="button" class="btn btn text-dark">X</button>
                                        </div>

                                        
                                        <div class="col-2"></div>
                                        <div class="col-6"><p>Họ và tên thành viên: <span class="dau_">(*)</span></p></div>
                                        <div class="col-4"></div>
                                        <div class="tentaikhoan d-flex justify-content-center">
                                            <input name="relative_fullname[]" style="width:69%; border: 1px solid #ebebeb"  type="text" placeholder="">
                                        </div>

                                        {{-- <div class="col-2"></div>
                                        <div class="col-6" style="margin-top: -25px;">
                                            <p style="color: red;">*Vui lòng nhập Họ và tên</p></div>
                                        <div class="col-4"></div> --}}

                                        <div class="col-2"></div>
                                        <div class="col-6"><p>Ngày Sinh: <span class="dau_">(*)</span></p></div>
                                        <div class="col-4"></div>
                                        <div class="password d-flex justify-content-center">
                                            <input name="birthdate[]" style="width:69%; border: 1px solid #ebebeb" type="text" placeholder="">
                                        </div> 

                                        {{-- <div class="col-2"></div>
                                        <div class="col-6" style="margin-top: -25px;">
                                            <p style="color: red;">*Vui lòng nhập Ngày sinh</p></div>
                                        <div class="col-4"></div> --}}

                                        <div class="col-2"></div>
                                        <div class="col-6"><p>Giới tính: <span class="dau_">(*)</span></p></div>
                                        <div class="col-4"></div>
                                        <div class="tentaikhoan d-flex justify-content-center">
                                            <input name="gender[]" style="width:69%; border: 1px solid #ebebeb;" type="text" placeholder="">
                                        </div>

                                        {{-- <div class="col-2"></div>
                                        <div class="col-6" style="margin-top: -25px;">
                                            <p style="color: red;">*Vui lòng nhập Giới tính</p></div>
                                        <div class="col-4"></div> --}}

                                        <div class="col-2"></div>
                                        <div class="col-6"><p>Mối Quan Hệ Với Nhân Viên: <span class="dau_">(*)</span></p></div>
                                        <div class="col-4"></div>
                                        <div class="tentaikhoan d-flex justify-content-center">
                                            <input name="relationship[]" style="width:69%; border: 1px solid #ebebeb;" type="text" placeholder="">
                                        </div>

                                        {{-- <div class="col-2"></div>
                                        <div class="col-6" style="margin-top: -25px;">
                                            <p style="color: red;">*Vui lòng nhập Mối quan hệ với nhân viên</p></div>
                                        <div class="col-4"></div> --}}

                                        <div class="col-2"></div>
                                        <div class="col-6"><p>Số Điện Thoại: <span class="dau_">(*)</span></p></div>
                                        <div class="col-4"></div>
                                        <div class="tentaikhoan d-flex justify-content-center">
                                            <input name="phone[]" style="width:69%; border: 1px solid #ebebeb;" type="text" placeholder="">
                                        </div>

                                        {{-- <div class="col-2"></div>
                                        <div class="col-6" style="margin-top: -25px;">
                                            <p style="color: red;">*Vui lòng nhập Số điện thoại</p></div>
                                        <div class="col-4"></div> --}}

                                        <div class="col-2"></div>
                                        <div class="col-6"><p>CMND/CCCD: <span class="dau_">(*)</span></p></div>
                                        <div class="col-4"></div>
                                        <div class="tentaikhoan d-flex justify-content-center">
                                            <input name="citizen_card[]" style="width:69%; border: 1px solid #ebebeb;" type="text" placeholder="">
                                        </div>

                                        {{-- <div class="col-2"></div>
                                        <div class="col-6" style="margin-top: -25px;">
                                            <p style="color: red;">*Vui lòng nhập CMND/CCCD</p></div>
                                        <div class="col-4"></div> --}}
                                    </div>    
                                </span>
                            </div>   
                    </div>           
                </div> 
            </div>
            <form action="{{ route('nhanvien.tourregisPost', $tourInfo->id) }}" method="POST">
            @csrf
            <div id="memo">
                @isset($relativeInfos)
                    @foreach ($relativeInfos as $relativeInfo)
                    @if($relativeInfo->relationship == null)   
                        @continue 
                    @endif
                    <div class="row">
                        <input type="hidden" name="id[]" value="{{ $relativeInfo->id }}">
                        <div class="col-lg-12">
                            <div class="contact__form__title" style="margin-top: 10px; margin-bottom: 20px;">
                                <h2>Thành viên : {{ $relativeInfo->relative_fullname }}({{ $relativeInfo->relationship }})</h2>
                            </div>
                                <div class="d-flex justify-content-center">
                                    <span class="border" style="width:60%">
                                        <div class="row" style="margin-top: 10px">
                                            <div class="col-3"></div>
                                            <div class="col-7"></div>
                                            <div class="col-2">
                                                <button id = "hide" type="button" class="btn btn text-dark">X</button>
                                            </div>
    
                                            
                                            <div class="col-2"></div>
                                            <div class="col-6"><p>Họ và tên thành viên: <span class="dau_">(*)</span></p></div>
                                            <div class="col-4"></div>
                                            <div class="tentaikhoan d-flex justify-content-center">
                                                <input name="relative_fullname[]" style="width:69%; border: 1px solid #ebebeb"  
                                                type="text" placeholder="" value="{{ $relativeInfo->relative_fullname }}">
                                            </div>
    
                                            {{-- <div class="col-2"></div>
                                            <div class="col-6" style="margin-top: -25px;">
                                                <p style="color: red;">*Vui lòng nhập Họ và tên</p></div>
                                            <div class="col-4"></div> --}}
    
                                            <div class="col-2"></div>
                                            <div class="col-6"><p>Ngày Sinh: <span class="dau_">(*)</span></p></div>
                                            <div class="col-4"></div>
                                            <div class="password d-flex justify-content-center">
                                                <input name="birthdate[]" style="width:69%; border: 1px solid #ebebeb" 
                                                type="text" placeholder="" value="{{ date('d-m-Y', strtotime($relativeInfo->birthdate)) }}">
                                            </div> 
    
                                            {{-- <div class="col-2"></div>
                                            <div class="col-6" style="margin-top: -25px;">
                                                <p style="color: red;">*Vui lòng nhập Ngày sinh</p></div>
                                            <div class="col-4"></div> --}}
    
                                            <div class="col-2"></div>
                                            <div class="col-6"><p>Giới tính: <span class="dau_">(*)</span></p></div>
                                            <div class="col-4"></div>
                                            <div class="tentaikhoan d-flex justify-content-center">
                                                <input name="gender[]" style="width:69%; border: 1px solid #ebebeb;" 
                                                type="text" placeholder="" value="{{ $relativeInfo->gender }}">
                                            </div>
    
                                            {{-- <div class="col-2"></div>
                                            <div class="col-6" style="margin-top: -25px;">
                                                <p style="color: red;">*Vui lòng nhập Giới tính</p></div>
                                            <div class="col-4"></div> --}}
    
                                            <div class="col-2"></div>
                                            <div class="col-6"><p>Mối Quan Hệ Với Nhân Viên: <span class="dau_">(*)</span></p></div>
                                            <div class="col-4"></div>
                                            <div class="tentaikhoan d-flex justify-content-center">
                                                <input name="relationship[]" style="width:69%; border: 1px solid #ebebeb;" 
                                                type="text" placeholder="" value="{{ $relativeInfo->relationship }}">
                                            </div>
    
                                            {{-- <div class="col-2"></div>
                                            <div class="col-6" style="margin-top: -25px;">
                                                <p style="color: red;">*Vui lòng nhập Mối quan hệ với nhân viên</p></div>
                                            <div class="col-4"></div> --}}
    
                                            <div class="col-2"></div>
                                            <div class="col-6"><p>Số Điện Thoại: <span class="dau_">(*)</span></p></div>
                                            <div class="col-4"></div>
                                            <div class="tentaikhoan d-flex justify-content-center">
                                                <input name="phone[]" style="width:69%; border: 1px solid #ebebeb;" 
                                                type="text" placeholder="" value="{{ $relativeInfo->phone }}">
                                            </div>
    
                                            {{-- <div class="col-2"></div>
                                            <div class="col-6" style="margin-top: -25px;">
                                                <p style="color: red;">*Vui lòng nhập Số điện thoại</p></div>
                                            <div class="col-4"></div> --}}
    
                                            <div class="col-2"></div>
                                            <div class="col-6"><p>CMND/CCCD: <span class="dau_">(*)</span></p></div>
                                            <div class="col-4"></div>
                                            <div class="tentaikhoan d-flex justify-content-center">
                                                <input name="citizen_card[]" style="width:69%; border: 1px solid #ebebeb;" 
                                                type="text" placeholder="" value="{{ $relativeInfo->citizen_card }}">
                                            </div>
    
                                            {{-- <div class="col-2"></div>
                                            <div class="col-6" style="margin-top: -25px;">
                                                <p style="color: red;">*Vui lòng nhập CMND/CCCD</p></div>
                                            <div class="col-4"></div> --}}
                                        </div>    
                                    </span>
                                </div>   
                        </div>           
                    </div> 
                    @endforeach
                @endisset
            </div>
            <div class="row" style="margin-top: 15px">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-3">
                <button id="themthanhvien" type="button" class="site-btn" data-toggle="collapse">
                        Thêm Thành Viên
                </button>
              </div>
              
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-2">
                  <button type="submit" class="site-btn">Đăng Ký</button>
              </div>
            </div>    
            </form>            
        </div>                           
    </div>
<script>
$(document).ready(function()
{
	
  $("#hide").click(function()
  {
   	
  }
  );

  $("#themthanhvien").click(function()
  {
    $("#memo").append($("#demo").html());
  }
  );
}
);
</script>
@endsection