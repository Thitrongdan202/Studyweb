<?php

// Define the SinhVien class from previous exercise
class SinhVien {
    private $maSinhVien;
    private $tenSinhVien;
    private $diemTrungBinh;

    public function __construct($maSinhVien, $tenSinhVien, $diemTrungBinh) {
        $this->maSinhVien = $maSinhVien;
        $this->tenSinhVien = $tenSinhVien;
        $this->diemTrungBinh = $diemTrungBinh;
    }

    public function getMaSinhVien() {
        return $this->maSinhVien;
    }

    public function getTenSinhVien() {
        return $this->tenSinhVien;
    }

    public function getDiemTrungBinh() {
        return $this->diemTrungBinh;
    }

    public function hienThiThongTin() {
        echo "Mã sinh viên: " . $this->maSinhVien . " - ";
        echo "Tên sinh viên: " . $this->tenSinhVien . " - ";
        echo "Điểm trung bình: " . $this->diemTrungBinh . "<br>";
    }
}

// Define the DanhSachSinhVien class
class DanhSachSinhVien {
    private $danhSach = [];

    // Add a student to the list
    public function themSinhVien($sinhVien) {
        $this->danhSach[] = $sinhVien;
    }

    // Display all students
    public function xuatDanhSach() {
        foreach ($this->danhSach as $sinhVien) {
            $sinhVien->hienThiThongTin();
        }
    }

    // Remove a student by ID
    public function xoaSinhVien($maSinhVien) {
        foreach ($this->danhSach as $key => $sinhVien) {
            if ($sinhVien->getMaSinhVien() === $maSinhVien) {
                unset($this->danhSach[$key]);
                echo "Đã xóa sinh viên có mã: $maSinhVien <br>";
                return;
            }
        }
        echo "Không tìm thấy sinh viên với mã: $maSinhVien <br>";
    }

    // Find a student by name
    public function timSinhVienTheoTen($tenSinhVien) {
        foreach ($this->danhSach as $sinhVien) {
            if (stripos($sinhVien->getTenSinhVien(), $tenSinhVien) !== false) {
                $sinhVien->hienThiThongTin();
                return;
            }
        }
        echo "Không tìm thấy sinh viên với tên: $tenSinhVien <br>";
    }

    // Get the highest average score
    public function diemTrungBinhCaoNhat() {
        $maxScore = 0;
        foreach ($this->danhSach as $sinhVien) {
            if ($sinhVien->getDiemTrungBinh() > $maxScore) {
                $maxScore = $sinhVien->getDiemTrungBinh();
            }
        }
        echo "Điểm trung bình cao nhất là: $maxScore <br>";
    }

    // Sort students by average score in ascending order
    public function sapXepTheoDiemTrungBinh() {
        usort($this->danhSach, function ($a, $b) {
            return $a->getDiemTrungBinh() <=> $b->getDiemTrungBinh();
        });
        echo "Danh sách đã được sắp xếp theo điểm trung bình tăng dần: <br>";
        $this->xuatDanhSach();
    }
}

// Example usage
$danhSach = new DanhSachSinhVien();
$sinhVien1 = new SinhVien("SV001", "Nguyen Van A", 8.5);
$sinhVien2 = new SinhVien("SV002", "Le Thi B", 9.0);
$sinhVien3 = new SinhVien("SV003", "Tran Van C", 7.5);

$danhSach->themSinhVien($sinhVien1);
$danhSach->themSinhVien($sinhVien2);
$danhSach->themSinhVien($sinhVien3);

// Display the list
$danhSach->xuatDanhSach();

// Remove a student by ID
$danhSach->xoaSinhVien("SV002");

// Search for a student by name
$danhSach->timSinhVienTheoTen("Nguyen");

// Display the highest average score
$danhSach->diemTrungBinhCaoNhat();

// Sort the students by average score
$danhSach->sapXepTheoDiemTrungBinh();
?>
