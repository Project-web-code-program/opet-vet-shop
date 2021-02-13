<div class="box box-info" id="tambah-pembayaran-app">
  <div class="box-header ">
    <h3 class="box-title">Tambah Pembayaran</h3>
  </div>

  <div class="box-body">
    <div class="btn-back-to-list">
      <span class="fa fa-arrow-left"></span> <span class="text">List Pembayaran</span>
    </div>
    <div class="m-t-25px">
      <form class="form-hasil-pemeriksaan">
        <div class="col-md-12 m-b-20px">
          <label for="selectedPasien">Cari Pasien</label>
          <select id="selectedPasien" class="form-control" style="width: 100%">
          </select>
          <div id="pasienErr1" class="validate-error"></div>
        </div>
        <div class="col-md-6">
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Nomor Registrasi</div>
            <div id="nomorRegistrasiTxt" class="p-left-10px">BVC-RP-AS-001</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Nomor Pasien</div>
            <div id="nomorPasienTxt" class="p-left-10px">BVC-P-AS-0001</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Jenis Hewan</div>
            <div id="jenisHewanTxt" class="p-left-10px">Kucing</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Nama Hewan</div>
            <div id="namaHewanTxt" class="p-left-10px">KEMET</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Jenis Kelamin</div>
            <div id="jenisKelaminTxt" class="p-left-10px">Betina</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Nama Pendaftar</div>
            <div id="namaPendaftarTxt" class="p-left-10px">Sucipto</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Usia Hewan</div>
            <div class="p-left-10px">
              <span id="usiaHewanTahunTxt">3 Tahun</span>&nbsp;&nbsp;
              <span id="usiaHewanBulanTxt">3 Bulan</span>
            </div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Nama Pemilik</div>
            <div id="namaPemilikTxt" class="p-left-10px">Adiyansyah Dwi P</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Alamat Pemilik</div>
            <div id="alamatPemilikTxt" class="p-left-10px">Jalan Perumahan Mahkota Simprug</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Nomor HP Pemilik</div>
            <div id="nomorHpPemilikTxt" class="p-left-10px" style="width: 75%">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
          </div>
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Keluhan</div>
            <div id="keluhanTxt" class="p-left-10px" style="width: 75%">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
          </div>
        </div>
        <div class="col-md-12 m-b-10px">
          <div class="label-detail-div m-b-10px">Jasa</div>
          <div class="table-responsive">
            <table class="table table-striped text-nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Dibuat Oleh</th>
                  <th>Jenis Layanan</th>
                  <th>Kategori Jasa</th>
                  <th>Jumlah</th>
                  <th>Harga Satuan</th>
                  <th>Harga Keseluruhan</th>
                  <th>Pembayaran</th>
                </tr>
              </thead>
              <tbody id="list-selected-jasa"></tbody>
            </table>
          </div>
        </div>
        <div class="col-md-12 m-b-10px">
          <div class="label-detail-div m-b-10px">Barang</div>
          <div class="table-responsive">
            <table class="table table-striped text-nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Dibuat Oleh</th>
                  <th>Nama Barang</th>
                  <th>Kategori Barang</th>
                  <th>Satuan Barang</th>
                  <th>Jumlah</th>
                  <th>Harga Satuan</th>
                  <th>Harga Keseluruhan</th>
                  <th>Pembayaran</th>
                </tr>
              </thead>
              <tbody id="list-selected-barang"></tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex m-b-10px">
            <div class="label-detail-div">Rawat Inap</div>
            <div id="rawatInapTxt" class="p-left-10px">Ya</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="d-flex">
            <div class="label-detail-div">Status Pemeriksaan</div>
            <div id="statusPemeriksaanTxt" class="p-left-10px">Selesai</div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-12 m-t-25px">
      <div style="font-weight: 700">Detail Tagihan</div>
    </div>
    <div class="col-md-12 indented-detail-tagihan">
      <div class="label-detail-div m-b-10px">Jasa</div>
      <div class="table-responsive">
        <table class="table table-striped text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Dibuat Oleh</th>
              <th>Jenis Layanan</th>
              <th>Kategori Jasa</th>
              <th>Jumlah</th>
              <th>Harga Satuan</th>
              <th>Harga Keseluruhan</th>
            </tr>
          </thead>
          <tbody id="list-tagihan-jasa">
            <tr><td colspan="8">No data.</td></tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-12 indented-detail-tagihan">
      <div class="label-detail-div m-b-10px">Barang</div>
      <div class="table-responsive">
        <table class="table table-striped text-nowrap">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Dibuat Oleh</th>
              <th>Nama Barang</th>
              <th>Kategori Barang</th>
              <th>Satuan Barang</th>
              <th>Jumlah</th>
              <th>Harga Satuan</th>
              <th>Harga Keseluruhan</th>
            </tr>
          </thead>
          <tbody id="list-tagihan-barang">
            <tr><td colspan="9">No data.</td></tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="col-md-12 indented-detail-tagihan">
      <div class="d-flex m-b-10px">
        <div style="font-weight: 700">Total tagihan</div>
        <div id="totalBayarTxt" class="p-left-10px" style="word-break: break-all;"></div>
      </div>
    </div>

    <div class="col-md-12 m-t-25px">
      <div id="beErr" class="validate-error">
        - Pembayaran Jasa harus dipilih salah satu<br>
        - Pembayaran Barang harus dipilih salah satu<br>
        - Status Pembayaran tidak dapat diselesaikan, karena terdapat barang atau jasa yang masih belum dibayarkan
      </div>
    </div>
    <div class="col-md-12 m-t-25px">
      <button id="btnSubmitPembayaran" type="button" class="btn btn-primary pull-right">Simpan & Cetak</button>
      <button type="button" class="btn btn-default pull-right m-r-10px">Kembali</button>
    </div>
  </div>
  
</div>