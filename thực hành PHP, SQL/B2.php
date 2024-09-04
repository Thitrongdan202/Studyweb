<?php
class SinhVien {
    private $maSinhVien;
    private $tenSinhVien;
    private $diemTrungBinh;

    // Phương thức khởi tạo
    public function __construct($maSinhVien = '', $tenSinhVien = '', $diemTrungBinh = 0) {
        $this->maSinhVien = $maSinhVien;
        $this->tenSinhVien = $tenSinhVien;
        $this->diemTrungBinh = $diemTrungBinh;
    }

    // Phương thức gán mã sinh viên, tên sinh viên, điểm trung bình
    public function setMaSinhVien($maSinhVien) {
        $this->maSinhVien = $maSinhVien;
    }

    public function setTenSinhVien($tenSinhVien) {
        $this->tenSinhVien = $tenSinhVien;
    }

    public function setDiemTrungBinh($diemTrungBinh) {
        $this->diemTrungBinh = $diemTrungBinh;
    }

    // Phương thức lấy mã sinh viên, tên sinh viên, điểm trung bình
    public function getMaSinhVien() {
        return $this->maSinhVien;
    }

    public function getTenSinhVien() {
        return $this->tenSinhVien;
    }

    public function getDiemTrungBinh() {
        return $this->diemTrungBinh;
    }

    // Phương thức hiển thị thông tin sinh viên
    public function hienThiThongTin() {
        echo "Mã sinh viên: " . $this->getMaSinhVien() . "<br>";
        echo "Tên sinh viên: " . $this->getTenSinhVien() . "<br>";
        echo "Điểm trung bình: " . $this->getDiemTrungBinh() . "<br>";
    }
}

// Ví dụ sử dụng lớp SinhVien
$sinhVien = new SinhVien();
$sinhVien->setMaSinhVien("SV001");
$sinhVien->setTenSinhVien("Nguyen Van A");
$sinhVien->setDiemTrungBinh(8.5);
$sinhVien->hienThiThongTin();
?>
