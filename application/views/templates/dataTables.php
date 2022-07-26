<div class="containerr mt-5 ">
    <h4>Daftar Surat</h4>
    <div class="d-flex w-50 mb-3">
        <select class="form-select me-3" aria-label="Default select example">
            <option selected hidden>Pilih Pemerintahan</option>
            <option value="1">Pusat</option>
            <option value="2">Provinsi</option>
            <option value="3">Kabupaten</option>
        </select>
        <select class="form-select" aria-label="Default select example">
            <option selected hidden>Pilih Perangkat Daerah</option>
            <option value="1">Dinas</option>
            <option value="2">Badan</option>
            <option value="3">Setda</option>
        </select>
    </div>
    <div class="card">
        <div class="card-body table-responsive-sm">
            <table id="example" class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Pingirim</th>
                        <th>Jenis Surat</th>
                        <th>Perihal</th>
                        <th>Tanggal Masuk</th>
                        <th class="hala"></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>


<style>
    .containerr {
        box-sizing: border-box;
        /* margin: auto; */
        flex-grow: 1;
        margin-left: 30px;
        margin-right: 30px;
    }

    /* .hala {
        width: 300px;
    } */

    .cuss {
        display: flex;
        justify-content: center;
    }

    .cuss .middle {
        margin-right: 28px;
        margin-left: 28px;
    }

    .cuss .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
    }

    .cuss .btn i {
        margin-right: 6px;
        box-sizing: border-box;
    }

    /* .cuss .btn .bi-eye {
        color: #111827;
    } */

    /* table tbody td {
        display: flex;
        justify-content: space-around;
    } */
</style>