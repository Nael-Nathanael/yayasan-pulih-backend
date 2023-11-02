<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container my-2">

        <form method="post" enctype="multipart/form-data" action="<?= route_to("object.psy.create") ?>" class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Register Psikolog</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Name<span class='text-danger'>*</span></label>
                            <input
                                    id="name"
                                    placeholder="Name"
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="isAvailable">Tersedia?<span class='text-danger'>*</span></label>
                            <select name="isAvailable" class="form-select" required id="isAvailable">
                                <option value="1" selected>Ya</option>
                                <option value="0">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="SIPP">SIPP<span class='text-danger'>*</span></label>
                            <input
                                    id="SIPP"
                                    placeholder="1067-21-2-2"
                                    type="text"
                                    class="form-control"
                                    name="SIPP"
                            >
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <label for="STR">STR<span class='text-danger'>*</span></label>
                            <input
                                    id="STR"
                                    placeholder="13 24 8 2 1 22-4442490"
                                    type="text"
                                    class="form-control"
                                    name="STR"
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="sesi">Total Sesi<span class='text-danger'>*</span></label>
                            <input
                                    id="sesi"
                                    placeholder="Total Sesi"
                                    type="number"
                                    value="0"
                                    class="form-control"
                                    name="sesi"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="rating">Total Rating<span class='text-danger'>*</span></label>
                            <input
                                    id="rating"
                                    placeholder="Min 0, Max 100"
                                    type="number"
                                    min="0"
                                    value="100"
                                    max="100"
                                    class="form-control"
                                    name="rating"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="reviews">Total Reviews<span class='text-danger'>*</span></label>
                            <input
                                    id="reviews"
                                    placeholder="Total Reviews"
                                    type="number"
                                    min="0"
                                    value="0"
                                    max="100"
                                    class="form-control"
                                    name="reviews"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="pengalaman_praktik">Pengalaman Praktik<span class='text-danger'>*</span></label>
                            <input
                                    id="pengalaman_praktik"
                                    placeholder="4 - 10 Tahun"
                                    type="text"
                                    value="4 - 10 Tahun"
                                    class="form-control"
                                    name="pengalaman_praktik"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tag">Kategori<span class='text-danger'>*</span></label>
                            <input
                                    id="tag"
                                    placeholder="Psikolog Klinis Umum"
                                    type="text"
                                    value="Psikolog Klinis Umum"
                                    class="form-control"
                                    name="tag"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="mastery">Keahlian<span class='text-danger'>*</span></label>
                            <input
                                    id="mastery"
                                    placeholder="Adiksi, Anak & Remaja, Anak Berkebutuhan Khusus"
                                    type="text"
                                    class="form-control"
                                    name="mastery"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="photo">Foto<span class='text-danger'>*</span></label>
                            <input type="file" id="photo" required name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description">Deskripsi<span class='text-danger'>*</span></label>
                            <textarea
                                    id="description"
                                    type="text"
                                    class="form-control"
                                    name="description"
                                    rows="3"
                            ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer border-0">
                <button class="btn btn-primary mx-auto">
                    Submit
                </button>
            </div>
        </form>
    </div>
<?= $this->endSection(); ?>