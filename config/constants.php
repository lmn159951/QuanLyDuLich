<?php

use Illuminate\Support\Carbon;

return [

    'agencies' => [
        [
            'name' => 'Trụ sở chính',
            'address' => 'Nhà Internet, Lô 2A, Làng Quốc Tế Thăng Long, Dịch Vọng, Cầu Giấy, Hà Nội',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Tổng công ty dịch vụ viễn thông (VNPT-VinaPhone)',
            'address' => 'Tòa nhà VNPT, số 57 Phố Huỳnh Thúc Kháng, Phường Láng Hạ, Quận Đống Đa, Thành phố Hà Nội, Việt Nam',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Tổng công ty hạ tầng mạng (VNPT-Net)',
            'address' => 'Số 30, đường Phạm Hùng, phường Mỹ Đình 1, quận Nam Từ Liêm, thành phố Hà Nội',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Chi nhánh Miền Nam',
            'address' => 'Tầng 4, toà nhà VNPT, 42 Phạm Ngọc Thạch, phường 6, quận 3, thành phố Hồ Chí Minh',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Chi nhánh Miền Trung',
            'address' => 'Số 24 Lê Thánh Tôn, thành phố Đà Nẵng',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Tổng công ty truyền thông (VNPT-Media)',
            'address' => '21 Hồ Văn Huê, Phường 9, Phú Nhuận, Thành phố Hồ Chí Minh',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Công ty Công nghệ thông tin VNPT(VNPT-IT)',
            'address' => '57 Huỳnh Thúc Kháng, Đống Đa, Hà Nội',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Công ty CP Công nghệ Công nghiệp Bưu chính Viễn thông (VNPT-Technology)',
            'address' => 'Khu CNC1,Khu CNC Hòa Lạc, Nạ Bằng, Thạch Thất, Hà Nội',
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'Trường Trung học Bưu chính Viễn thông và Công nghệ thông tin',
            'address' => '9C32+RHM, Tân Mỹ Chánh, Thành phố Mỹ Tho, Tiền Giang',
            'created_at' => Carbon::now()
        ],
    ],

    'departments' => [
        ['name' => 'Phòng kế toán', 'created_at' => Carbon::now()],
        ['name' => 'Phòng tài chín', 'created_at' => Carbon::now()],
        ['name' => 'Phòng hành chính', 'created_at' => Carbon::now()],
        ['name' => 'Phòng nhân sự', 'created_at' => Carbon::now()],
        ['name' => 'Phòng kinh doanh', 'created_at' => Carbon::now()],
        ['name' => 'Phòng mua sắm vật tư', 'created_at' => Carbon::now()],
        ['name' => 'Phòng nghiên cứu và phát triển', 'created_at' => Carbon::now()],
        ['name' => 'Phòng vận chuyển', 'created_at' => Carbon::now()],
    ],

    'positionNames' => [
        'Nhân viên phân tích dữ liệu',
        'Quản trị hệ thống',
        'Lập trình viên',
        'Kỹ sư phần mềm',
        'Nhân viên phân tích hệ thống',
        'Chuyên viên hỗ trợ kỹ thuật/ người sử dụng cuối cùng',
        'Thiết kế web/ dịch vụ Internet',
        'Người giám sát',
        'Trưởng Nhóm',
        'Sếp',
        'trợ lí giám đốc',
        'thư kí',
        'nhân viên',
        'Cán bộ, viên chức',
        'tổng giám đốc',
        'quản lý',
        'giám đốc',
        'phó giám đốc',
        'Hội đồng quản trị',
        'trưởng phòng',
        'phó trưởng phòng',
        'thư kí',
        'nhân viên',
        'Giám đốc',
        'Phó Giám đốc',
        'giám đốc điều hành',
        'giám đốc thông tin',
        'trưởng phòng hoạt động',
        'giám đốc tài chính',
        'phó chủ tịch',
        'Quản lý',
        'trưởng phòng',
        'Trưởng Bộ phận',
        'trưởng phòng nhân sự',
        'trưởng phòng tài chính',
        'trưởng phòng kế toán',
        'trưởng phòng sản xuất',
        'trưởng phòng marketing',
        'Trưởng Nhóm',
        'Sếp',
        'trợ lí giám đốc',
        'thư kí',
        'nhân viên',
        'Giám đốc',
        'Giám đốc điều hành',
        'Giám đốc thông tin',
        'Giám đốc tài chính',
        'Chủ tịch',
        'Trưởng phòng hoạt động',
        'Thành viên ban quản trị',
        'Phó Giám đốc',
        'Phó chủ tịch',
        'Quản lý',
        'trưởng phòng nhân sự',
        'trưởng phòng tài chính',
        'trưởng phòng kế toán',
        'trưởng phòng sản xuất',
        'trưởng phòng marketing',
        'Người giám sát',
        'Trưởng Nhóm',
        'trợ lí giám đốc',
        'Trưởng Bộ phận',
        'trưởng phòng',
        'người giám sát',
        'Thư kín',
        'nhân viên',
        'Giám đốc',
        'Phó Giám đốc',
        'giám đốc điều hành',
        'giám đốc thông tin',
        'trưởng phòng hoạt động',
        'giám đốc tài chính',
        'Chủ tịch',
        'phó chủ tịch',
        'Quản lý',
        'trưởng phòng',
        'Trưởng Bộ phận',
        'trưởng phòng nhân sự',
        'trưởng phòng tài chính',
        'trưởng phòng kế toán',
        'trưởng phòng sản xuất',
        'trưởng phòng marketing',
        'Người giám sát',
        'Trưởng Nhóm',
        'Sếp',
        'trợ lí giám đốc',
        'thư kí',
        'nhân viên',
        'Phó phòng kinh doanh',
    ],

    'regions' => [
        ['name' => 'Tây Bắc Bộ', 'created_at' => Carbon::now()],
        ['name' => 'Đông Bắc bộ', 'created_at' => Carbon::now()],
        ['name' => 'Đồng bằng sông Hồng', 'created_at' => Carbon::now()],
        ['name' => 'Bắc Trung Bộ', 'created_at' => Carbon::now()],
        ['name' => 'Nam Trung Bộ', 'created_at' => Carbon::now()],
        ['name' => 'Vùng Duyên hải Nam Trung Bộ', 'created_at' => Carbon::now()],
        ['name' => 'Vùng Đông Nam Bộ', 'created_at' => Carbon::now()],
        ['name' => 'Vùng đồng bằng sông Cửu Long', 'created_at' => Carbon::now()],
    ],

];
