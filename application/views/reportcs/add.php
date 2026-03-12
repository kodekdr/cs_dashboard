<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Tambah Report CS</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="row">
                            <!-- Field 1 & 2 -->
                            <div class="col-md-6 mb-3">
                                <label for="no_laporan" class="form-label mb-2">No. Laporan</label>
                                <input type="text" name="no_laporan" id="no_laporan" class="form-control" placeholder="Masukkan No. Laporan" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cabang" class="form-label mb-2">Cabang</label>
                                <input type="text" value="Kediri" readonly name="cabang" id="cabang" class="form-control" placeholder="Masukkan Cabang" required>
                            </div>

                            <!-- Field 3 & 4 -->
                            <div class="col-md-6 mb-3">
                                <label for="source" class="form-label mb-2">Source</label>
                                <select name="source" id="source" class="form-select" required>
                                    <option value="" disabled selected>Pilih Source</option>
                                    <?php foreach ($sources as $s) : ?>
                                        <option value="<?= $s['source']; ?>"><?= $s['source']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sub_source" class="form-label mb-2">Sub Source</label>
                                <select name="sub_source" id="sub_source" class="form-select" disabled>
                                    <option value="" disabled selected>Pilih Sub Source</option>
                                </select>
                            </div>

                            <!-- Field 5 & 6 -->
                            <div class="col-md-6 mb-3">
                                <label for="creator" class="form-label mb-2">Creator</label>
                                <select name="creator" id="creator" class="form-select" required>
                                    <option value="" disabled selected>Pilih Creator</option>
                                    <option value="1">Creator 1 (Dummy)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="create_on" class="form-label mb-2">Create On</label>
                                <input type="datetime-local" name="create_on" id="create_on" class="form-control" required>
                            </div>

                            <!-- Field 7 & 8 -->
                            <div class="col-md-6 mb-3">
                                <label for="status_caller" class="form-label mb-2">Status Caller</label>
                                <select name="status_caller" id="status_caller" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status Caller</option>
                                    <option value="1">Status 1 (Dummy)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="agen" class="form-label mb-2">Agen</label>
                                <select name="agen" id="agen" class="form-select">
                                    <option value="" disabled selected>Pilih Agen</option>
                                    <option value="1">Agen 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 9 & 10 -->
                            <div class="col-md-6 mb-3">
                                <label for="nomor_resi" class="form-label mb-2">Nomor Resi</label>
                                <input type="text" name="nomor_resi" id="nomor_resi" class="form-control" placeholder="Masukkan Nomor Resi" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="shipment_date" class="form-label mb-2">Shipment Date</label>
                                <input type="date" name="shipment_date" id="shipment_date" class="form-control" required>
                            </div>

                            <!-- Field 11 & 12 -->
                            <div class="col-md-6 mb-3">
                                <label for="shipper_name" class="form-label mb-2">Nama Pengirim</label>
                                <input type="text" name="shipper_name" id="shipper_name" class="form-control" placeholder="Masukkan Nama Pengirim" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="shipper_phone" class="form-label mb-2">No. Telp Pengirim</label>
                                <input type="text" name="shipper_phone" id="shipper_phone" class="form-control" placeholder="Masukkan No. Telp Pengirim">
                            </div>

                            <!-- Field 13 (Address) -->
                            <div class="col-md-12 mb-3">
                                <label for="shipper_address" class="form-label mb-2">Alamat Pengirim</label>
                                <textarea name="shipper_address" id="shipper_address" class="form-control" rows="2" placeholder="Masukkan Alamat Pengirim" required></textarea>
                            </div>

                            <!-- Field 14 & 15 -->
                            <div class="col-md-6 mb-3">
                                <label for="consignee_name" class="form-label mb-2">Nama Penerima</label>
                                <input type="text" name="consignee_name" id="consignee_name" class="form-control" placeholder="Masukkan Nama Penerima" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="consignee_phone" class="form-label mb-2">No. Telp Penerima</label>
                                <input type="text" name="consignee_phone" id="consignee_phone" class="form-control" placeholder="Masukkan No. Telp Penerima">
                            </div>

                            <!-- Field 16 (Address) -->
                            <div class="col-md-12 mb-3">
                                <label for="consignee_address" class="form-label mb-2">Alamat Penerima</label>
                                <textarea name="consignee_address" id="consignee_address" class="form-control" rows="2" placeholder="Masukkan Alamat Penerima" required></textarea>
                            </div>

                            <!-- Field 17 & 18 -->
                            <div class="col-md-6 mb-3">
                                <label for="express" class="form-label mb-2">Express</label>
                                <select name="express" id="express" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status Express</option>
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="category" class="form-label mb-2">Category</label>
                                <select name="category" id="category" class="form-select" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    <option value="1">Kategori 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 19 & 20 -->
                            <div class="col-md-6 mb-3">
                                <label for="case_type" class="form-label mb-2">Case Type</label>
                                <select name="case_type" id="case_type" class="form-select" required>
                                    <option value="" disabled selected>Pilih Case Type</option>
                                    <option value="1">Tipe 1 (Dummy)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sub_case_type" class="form-label mb-2">Sub Case Type</label>
                                <select name="sub_case_type" id="sub_case_type" class="form-select" required>
                                    <option value="" disabled selected>Pilih Sub Case Type</option>
                                    <option value="1">Sub Tipe 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 21 & 22 -->
                            <div class="col-md-6 mb-3">
                                <label for="priority" class="form-label mb-2">Priority</label>
                                <select name="priority" id="priority" class="form-select" required>
                                    <option value="" disabled selected>Pilih Prioritas</option>
                                    <option value="1">Low</option>
                                    <option value="2">Medium</option>
                                    <option value="3">High</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="origin_city_code" class="form-label mb-2">Origin City Code</label>
                                <select name="origin_city_code" id="origin_city_code" class="form-select" required>
                                    <option value="" disabled selected>Pilih Origin City Code</option>
                                    <option value="1">City Code 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 23 & 24 -->
                            <div class="col-md-6 mb-3">
                                <label for="origin" class="form-label mb-2">Origin</label>
                                <select name="origin" id="origin" class="form-select" required>
                                    <option value="" disabled selected>Pilih Origin</option>
                                    <option value="1">Origin 1 (Dummy)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="destination_city_code" class="form-label mb-2">Destination City Code</label>
                                <select name="destination_city_code" id="destination_city_code" class="form-select" required>
                                    <option value="" disabled selected>Pilih Dest City Code</option>
                                    <option value="1">Dest City Code 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 25 & 26 -->
                            <div class="col-md-6 mb-3">
                                <label for="destination_city" class="form-label mb-2">Destination City</label>
                                <select name="destination_city" id="destination_city" class="form-select" required>
                                    <option value="" disabled selected>Pilih Dest City</option>
                                    <option value="1">Dest City 1 (Dummy)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="zona" class="form-label mb-2">Zona</label>
                                <select name="zona" id="zona" class="form-select" required>
                                    <option value="" disabled selected>Pilih Zona</option>
                                    <option value="1">Zona 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 27 & 28 -->
                            <div class="col-md-6 mb-3">
                                <label for="sla" class="form-label mb-2">SLA</label>
                                <select name="sla" id="sla" class="form-select" required>
                                    <option value="" disabled selected>Pilih SLA</option>
                                    <option value="1">SLA 1 (Dummy)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status_reason" class="form-label mb-2">Status Reason</label>
                                <select name="status_reason" id="status_reason" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status Reason</option>
                                    <option value="1">Reason 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 29 & 30 -->
                            <div class="col-md-6 mb-3">
                                <label for="claim_propossed" class="form-label mb-2">Claim Proposed</label>
                                <input type="text" name="claim_propossed" id="claim_propossed" class="form-control" placeholder="Masukkan Claim Proposed">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="claim_approved" class="form-label mb-2">Claim Approved</label>
                                <input type="text" name="claim_approved" id="claim_approved" class="form-control" placeholder="Masukkan Claim Approved">
                            </div>

                            <!-- Field 31 & 32 -->
                            <div class="col-md-6 mb-3">
                                <label for="follow_up_by" class="form-label mb-2">Follow Up By</label>
                                <select name="follow_up_by" id="follow_up_by" class="form-select" required>
                                    <option value="" disabled selected>Pilih Follow Up By</option>
                                    <option value="1">User 1 (Dummy)</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status_sla" class="form-label mb-2">Status SLA</label>
                                <select name="status_sla" id="status_sla" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status SLA</option>
                                    <option value="1">On Time</option>
                                    <option value="0">Overdue</option>
                                </select>
                            </div>

                            <!-- Field 33 & 34 -->
                            <div class="col-md-6 mb-3">
                                <label for="status_case" class="form-label mb-2">Status Case</label>
                                <select name="status_case" id="status_case" class="form-select" required>
                                    <option value="" disabled selected>Pilih Status Case</option>
                                    <option value="1">Open</option>
                                    <option value="0">Closed</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="tanggal_case_close" class="form-label mb-2">Tanggal Case Close</label>
                                <input type="date" name="tanggal_case_close" id="tanggal_case_close" class="form-control">
                            </div>

                            <!-- Field 35 & 36 -->
                            <div class="col-md-6 mb-3">
                                <label for="due_date" class="form-label mb-2">Due Date</label>
                                <input type="date" name="due_date" id="due_date" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="assign_to" class="form-label mb-2">Assign To</label>
                                <select name="assign_to" id="assign_to" class="form-select">
                                    <option value="" disabled selected>Pilih Assign To</option>
                                    <option value="1">User 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Field 37 & 38 -->
                            <div class="col-md-6 mb-3">
                                <label for="divisi" class="form-label mb-2">Divisi</label>
                                <select name="divisi" id="divisi" class="form-select">
                                    <option value="" disabled selected>Pilih Divisi</option>
                                    <option value="1">Divisi 1 (Dummy)</option>
                                </select>
                            </div>

                            <!-- Textareas -->
                            <div class="col-md-12 mb-3">
                                <label for="keterangan" class="form-label mb-2">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="2" placeholder="Masukkan Keterangan"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="keterangan_follow_up" class="form-label mb-2">Keterangan Follow Up</label>
                                <textarea name="keterangan_follow_up" id="keterangan_follow_up" class="form-control" rows="2" placeholder="Masukkan Keterangan Follow Up"></textarea>
                            </div>
                        </div>

                        <div class="mt-4 text-end">
                            <a href="<?= base_url('reportcs'); ?>" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#source').change(function() {
            var source = $(this).val();
            if (source) {
                $.ajax({
                    url: "<?= base_url('reportcs/get_sub_source'); ?>",
                    type: "POST",
                    data: {
                        source: source
                    },
                    dataType: "json",
                    success: function(data) {
                        $('#sub_source').empty();
                        $('#sub_source').append('<option value="" disabled selected>Pilih Sub Source</option>');

                        // Cek jika data ada dan tidak kosong
                        if (data && data.length > 0 && data[0].sub_source !== null) {
                            $.each(data, function(key, value) {
                                if (value.sub_source !== null) {
                                    $('#sub_source').append('<option value="' + value.sub_source + '">' + value.sub_source + '</option>');
                                }
                            });

                            // Aktifkan jika ada setidaknya satu sub_source yang valid
                            if ($('#sub_source option').length > 1) {
                                $('#sub_source').prop('disabled', false);
                            } else {
                                $('#sub_source').prop('disabled', true);
                            }
                        } else {
                            $('#sub_source').prop('disabled', true);
                        }
                    }
                });
            } else {
                $('#sub_source').empty();
                $('#sub_source').append('<option value="" disabled selected>Pilih Sub Source</option>');
                $('#sub_source').prop('disabled', true);
            }
        });
    });
</script>