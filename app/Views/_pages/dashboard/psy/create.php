<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("content"); ?>
    <div class="container my-4">
        <h4 class="mb-3">Register Psikolog</h4>

        <form method="post" enctype="multipart/form-data" action="<?= route_to("object.psy.create") ?>">
            <div class="p-3 border-0">
                <h5>Data Psikolog</h5>
                <div class="row g-3">
                    <div class="col-9">
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
                    <div class="col-3">
                        <div class="form-group">
                            <label for="spesialisasi">Spesialisasi<span class='text-danger'>*</span></label>
                            <select name="spesialisasi" class="form-select" required id="spesialisasi">
                                <option value="" disabled selected>--PILIH SPESIALISASI--</option>
                                <option value="Klinis Dewasa">Klinis Dewasa</option>
                                <option value="Klinis Anak dan Remaja">Klinis Anak dan Remaja</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="photo">Foto<span class='text-danger'>*</span></label>
                            <input type="file" id="photo" required name="photo" class="form-control">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="domisili">Domisili<span class='text-danger'>*</span></label>
                            <select name="domisili" class="form-select" required id="domisili">
                                <option value="" disabled selected>--PILIH DOMISILI--</option>
                                <option value="Luar Jawa">Luar Jawa</option>
                                <option value="Jabodetabek">Jabodetabek</option>
                                <option value="Luar Jabodetabek">Luar Jabodetabek</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin<span class='text-danger'>*</span></label>
                            <select name="jenis_kelamin" class="form-select" required id="jenis_kelamin">
                                <option value="" disabled selected>--PILIH JENIS KELAMIN--</option>
                                <option value="L">L</option>
                                <option value="P">P</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Alamat Email Aktif<span class='text-danger'>*</span></label>
                            <input
                                    id="email"
                                    placeholder="Email"
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone">Nomor HP Aktif<span class='text-danger'>*</span></label>
                            <input
                                    id="phone"
                                    placeholder="+628123456789"
                                    type="tel"
                                    class="form-control"
                                    name="phone"
                                    required
                            >
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>Penguasaan Bahasa</h5>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lang_fluency_indonesia">Bahasa Indonesia<span class='text-danger'>*</span></label>
                            <select name="lang_fluency_indonesia" class="form-select" required id="lang_fluency_indonesia">
                                <option value="" disabled selected>--PILIH PENGUASAAN BAHASA--</option>
                                <option value="Basic">Basic</option>
                                <option value="Conversational">Conversational</option>
                                <option value="Advanced">Advanced</option>
                                <option value="Native">Native</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="lang_fluency_english">Bahasa Inggris<span class='text-danger'>*</span></label>
                            <select name="lang_fluency_english" class="form-select" required id="lang_fluency_english">
                                <option value="" disabled selected>--PILIH PENGUASAAN BAHASA--</option>
                                <option value="Basic">Basic</option>
                                <option value="Conversational">Conversational</option>
                                <option value="Advanced">Advanced</option>
                                <option value="Native">Native</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>Dokumen</h5>
                <div class="row g-3">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="CV_file">CV<span class='text-danger'>*</span></label>
                            <input
                                    id="CV_file"
                                    type="file"
                                    class="form-control"
                                    name="CV_file"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="ijazah_transcript_file">Ijazah dan Transkrip (Dijadikan 1 file)<span
                                        class='text-danger'>*</span></label>
                            <input
                                    id="ijazah_transcript_file"
                                    type="file"
                                    class="form-control"
                                    name="ijazah_transcript_file"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="motivational_letter_file">Motivational Letter<span class='text-danger'>*</span></label>
                            <input
                                    id="motivational_letter_file"
                                    type="file"
                                    class="form-control"
                                    name="motivational_letter_file"
                                    required
                            >
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>SIPP</h5>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="SIPP">Nomor SIPP<span class='text-danger'>*</span></label>
                            <input
                                    id="SIPP"
                                    type="text"
                                    class="form-control"
                                    name="SIPP"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="SIPP_year">Tahun mulai<span class='text-danger'>*</span></label>
                            <input
                                    id="SIPP_year"
                                    type="date"
                                    class="form-control"
                                    name="SIPP_year"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="SIPP_year_end">Tahun selesai<span class='text-danger'>*</span></label>
                            <input
                                    id="SIPP_year_end"
                                    type="date"
                                    class="form-control"
                                    name="SIPP_year_end"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="SIPP_file">File SIPP<span class='text-danger'>*</span></label>
                            <input
                                    id="SIPP_file"
                                    type="file"
                                    class="form-control"
                                    name="SIPP_file"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="SIPP_status">Status<span class='text-danger'>*</span></label>
                            <select name="SIPP_status" class="form-select" required id="SIPP_status">
                                <option value="" disabled selected>--PILIH STATUS SIPP--</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non Aktif">Non Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>STR</h5>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="STR">Nomor STR<span class='text-danger'>*</span></label>
                            <input
                                    id="STR"
                                    type="text"
                                    class="form-control"
                                    name="STR"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="STR_year">Tahun mulai<span class='text-danger'>*</span></label>
                            <input
                                    id="STR_year"
                                    type="date"
                                    class="form-control"
                                    name="STR_year"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="STR_year_end">Tahun selesai<span class='text-danger'>*</span></label>
                            <input
                                    id="STR_year_end"
                                    type="date"
                                    class="form-control"
                                    name="STR_year_end"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="STR_file">File STR<span class='text-danger'>*</span></label>
                            <input
                                    id="STR_file"
                                    type="file"
                                    class="form-control"
                                    name="STR_file"
                                    required
                            >
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="STR_status">Status<span class='text-danger'>*</span></label>
                            <select name="STR_status" class="form-select" required id="STR_status">
                                <option value="" disabled selected>--PILIH STATUS STR--</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non Aktif">Non Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>Pendidikan</h5>
                <div id="educationRowContainer" class="mb-2"></div>
                <button type="button" onclick="addEdu()" class="w-100 btn btn-sm btn-primary">
                    + Pendidikan
                </button>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>Pelatihan / Sertifikasi</h5>
                <div id="certRowContainer" class="mb-2"></div>
                <button type="button" onclick="addCert()" class="w-100 btn btn-sm btn-primary">
                    + Pelatihan / Sertifikasi
                </button>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>Pengalaman Pekerjaan</h5>
                <div id="workRowContainer" class="mb-2"></div>
                <button type="button" onclick="addWork()" class="w-100 btn btn-sm btn-primary">
                    + Pengalaman Pekerjaan
                </button>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>Pengalaman Organisasi</h5>
                <div id="expRowContainer" class="mb-2"></div>
                <button type="button" onclick="addExp()" class="w-100 btn btn-sm btn-primary">
                    + Pengalaman Organisasi
                </button>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0">
                <h5>Publikasi</h5>
                <div id="pubRowContainer" class="mb-2"></div>
                <button type="button" onclick="addPub()" class="w-100 btn btn-sm btn-primary">
                    + Publikasi
                </button>
            </div>
            <hr class="mx-3">
            <div class="p-3 border-0 text-center">
                <button class="btn btn-primary mx-auto">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <script>
        function deleteThisRow(element) {
            element.parentElement.parentElement.remove()
        }

        function addEdu(initial = false) {
            let h1 = document.createElement("div")
            h1.classList.add("d-flex")
            h1.classList.add("justify-content-between")
            h1.classList.add("w-100")
            h1.classList.add("gap-3")
            h1.classList.add("mb-3")
            h1.innerHTML = `
                                <div class="form-group">
                                    <label>Pendidikan<span class='text-danger'>*</span></label>
                                    <select name="edu_pendidikan[]" class="form-select" required>
                                        <option value="" disabled selected>--PILIH PENDIDIKAN--</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Universitas<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Universitas"
                                            type="text"
                                            class="form-control"
                                            name="edu_universitas[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Bidang Peminatan<span class='text-danger'>*</span></label>
                                    <select name="edu_bidang_peminatan[]" class="form-select" required>
                                        <option value="" disabled selected>--PILIH BIDANG PEMINATAN--</option>
                                        <option value="Klinis Anak dan Remaja">Klinis Anak dan Remaja</option>
                                        <option value="Klinis Dewasa">Klinis Dewasa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Tahun Lulus<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Tahun Lulus"
                                            type="text"
                                            class="form-control"
                                            name="edu_tahun_lulus[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>IPK<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="IPK"
                                            type="text"
                                            class="form-control"
                                            name="edu_ipk[]"
                                            required
                                    >
                                </div>

<div class="form-group ${initial ? 'invisible' : ''}">
    <label for="" class="invisible">.</label>
    <button class="d-block btn btn-danger btn-sm" type="button" onclick="${initial ? '' : "deleteThisRow(this)"}">
        Delete
    </button>
</div>
            `
            document.getElementById("educationRowContainer").append(h1)
        }

        function addCert() {
            let h1 = document.createElement("div")
            h1.classList.add("d-flex")
            h1.classList.add("justify-content-between")
            h1.classList.add("w-100")
            h1.classList.add("gap-3")
            h1.classList.add("mb-3")
            h1.innerHTML = `
                                <div class="form-group">
                                    <label>Nama Sertifikasi<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Nama Sertifikasi"
                                            type="text"
                                            class="form-control"
                                            name="cert_nama_sertifikasi[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Issuer<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Issuer"
                                            type="text"
                                            class="form-control"
                                            name="cert_issuer[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Tahun<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Tahun"
                                            type="text"
                                            class="form-control"
                                            name="cert_tahun[]"
                                            required
                                    >
                                </div>

<div class="form-group">
    <label for="" class="invisible">.</label>
    <button class="d-block btn btn-danger btn-sm" type="button" onclick="deleteThisRow(this)">
        Delete
    </button>
</div>
            `
            document.getElementById("certRowContainer").append(h1)
        }

        function addWork() {
            let h1 = document.createElement("div")
            h1.classList.add("d-flex")
            h1.classList.add("justify-content-between")
            h1.classList.add("w-100")
            h1.classList.add("gap-3")
            h1.classList.add("mb-3")
            h1.innerHTML = `
                                <div class="form-group">
                                    <label>Posisi<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Posisi"
                                            type="text"
                                            class="form-control"
                                            name="work_current_position[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Bidang<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Bidang"
                                            type="text"
                                            class="form-control"
                                            name="work_bidang[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Perusahaan<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Perusahaan"
                                            type="text"
                                            class="form-control"
                                            name="work_perusahaan[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Tahun mulai<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Tahun"
                                            type="text"
                                            class="form-control"
                                            name="work_tahun_bekerja_start[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Tahun mulai<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Tahun"
                                            type="text"
                                            class="form-control"
                                            name="work_tahun_bekerja_end[]"
                                            required
                                    >
                                </div>

<div class="form-group">
    <label for="" class="invisible">.</label>
    <button class="d-block btn btn-danger btn-sm" type="button" onclick="deleteThisRow(this)">
        Delete
    </button>
</div>
            `
            document.getElementById("workRowContainer").append(h1)
        }

        function addExp() {
            let h1 = document.createElement("div")
            h1.classList.add("d-flex")
            h1.classList.add("justify-content-between")
            h1.classList.add("w-100")
            h1.classList.add("gap-3")
            h1.classList.add("mb-3")
            h1.innerHTML = `
                                <div class="form-group">
                                    <label>Bidang<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Bidang"
                                            type="text"
                                            class="form-control"
                                            name="oth_bidang[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Organisasi<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Organisasi"
                                            type="text"
                                            class="form-control"
                                            name="oth_organisasi[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Tahun<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Tahun"
                                            type="text"
                                            class="form-control"
                                            name="oth_tahun[]"
                                            required
                                    >
                                </div>

<div class="form-group">
    <label for="" class="invisible">.</label>
    <button class="d-block btn btn-danger btn-sm" type="button" onclick="deleteThisRow(this)">
        Delete
    </button>
</div>
            `
            document.getElementById("expRowContainer").append(h1)
        }

        function addPub() {
            let h1 = document.createElement("div")
            h1.classList.add("d-flex")
            h1.classList.add("justify-content-between")
            h1.classList.add("w-100")
            h1.classList.add("gap-3")
            h1.classList.add("mb-3")
            h1.innerHTML = `
                                <div class="form-group">
                                    <label>Judul Publikasi<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Judul Publikasi"
                                            type="text"
                                            class="form-control"
                                            name="pub_nama[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Issuer<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Issuer"
                                            type="text"
                                            class="form-control"
                                            name="pub_issuer[]"
                                            required
                                    >
                                </div>
                                <div class="form-group">
                                    <label>Tahun<span class='text-danger'>*</span></label>
                                    <input
                                            placeholder="Tahun"
                                            type="text"
                                            class="form-control"
                                            name="pub_tahun[]"
                                            required
                                    >
                                </div>

<div class="form-group">
    <label for="" class="invisible">.</label>
    <button class="d-block btn btn-danger btn-sm" type="button" onclick="deleteThisRow(this)">
        Delete
    </button>
</div>
            `
            document.getElementById("pubRowContainer").append(h1)
        }

        addEdu(true)
    </script>
<?= $this->endSection(); ?>