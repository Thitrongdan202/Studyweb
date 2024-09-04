<?php
class MangSoNguyen {
    private $mang = [];

    // Khởi tạo mảng với số phần tử và giá trị cho từng phần tử
    public function khoiTaoMang($soPhanTu, $giaTri) {
        $this->mang = array_fill(0, $soPhanTu, $giaTri);
    }

    // Phương thức tính tổng các phần tử trong mảng
    public function tinhTong() {
        return array_sum($this->mang);
    }

    // Phương thức xuất mảng ra trang web
    public function xuatMang() {
        echo implode(', ', $this->mang);
    }

    // Phương thức tìm phần tử lớn nhất
    public function timMax() {
        return max($this->mang);
    }

    // Phương thức tìm phần tử nhỏ nhất
    public function timMin() {
        return min($this->mang);
    }

    // Phương thức tìm một phần tử có hay không trong mảng
    public function timPhanTu($giaTri) {
        return in_array($giaTri, $this->mang);
    }

    // Phương thức xóa một phần tử trong mảng
    public function xoaPhanTu($giaTri) {
        $key = array_search($giaTri, $this->mang);
        if ($key !== false) {
            unset($this->mang[$key]);
        }
    }

    // Phương thức sắp xếp mảng tăng dần
    public function sapXepTang() {
        sort($this->mang);
    }

    // Phương thức kiểm tra mảng có đối xứng hay không
    public function kiemTraDoiXung() {
        return $this->mang === array_reverse($this->mang);
    }

    // Phương thức đảo một mảng
    public function daoMang() {
        $this->mang = array_reverse($this->mang);
    }

    // Phương thức đếm số phần tử có giá trị bằng x trong mảng
    public function demPhanTu($giaTri) {
        return count(array_keys($this->mang, $giaTri));
    }
}

// Ví dụ sử dụng lớp
$mang = new MangSoNguyen();
$mang->khoiTaoMang(5, 3); // Khởi tạo mảng với 5 phần tử có giá trị 3
echo "Mảng: ";
$mang->xuatMang();
echo "<br>Tổng: " . $mang->tinhTong();
echo "<br>Phần tử lớn nhất: " . $mang->timMax();
echo "<br>Phần tử nhỏ nhất: " . $mang->timMin();
echo "<br>Kiểm tra phần tử 3: " . ($mang->timPhanTu(3) ? 'Có' : 'Không');
$mang->xoaPhanTu(3);
echo "<br>Mảng sau khi xóa phần tử 3: ";
$mang->xuatMang();
$mang->sapXepTang();
echo "<br>Mảng sau khi sắp xếp: ";
$mang->xuatMang();
?>
