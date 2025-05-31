<div class="ibox ">
    <div class="ibox-title">
        <h5><i class="fa fa-cog"></i> Konfigurasi Maintenence</h5>
    </div>
    <div class="ibox-content">
        <form action="">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum
                        laborum ut ipsa nam quod numquam iste, alias corporis. Corrupti doloremque velit dolores
                        molestias qui quos expedita perspiciatis, ad consequatur?</div>
                </div>
                <!-- manipulasi  -->
                <div class="col-md-4">
                    <label for="" class="pt-2">Manipulasi Total Pengguna</label>
                    <input type="text" class="form-control">
                </div>
                <!-- manipulasi  -->
                <div class="col-md-4">
                    <label for="" class="pt-2">Manipulasi Total Deposit</label>
                    <input type="text" class="form-control">
                </div>
                <!-- manipulasi  -->
                <div class="col-md-4">
                    <label for="" class="pt-2">Manipulasi Total Pesanan</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-md-12 d-flex justify-content-end mt-3">
                    <label for="">&nbsp;</label><br>
                    <button class="btn btn-danger btn-rounded" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                    &nbsp;
                    <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
        <form action="">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum
                        laborum ut ipsa nam quod numquam iste, alias corporis. Corrupti doloremque velit dolores
                        molestias qui quos expedita perspiciatis, ad consequatur?</div>
                </div>
                <!-- manipulasi  -->
                <div class="col-md-6">
                    <label for="" class="pt-2">Manipulasi Admin Online</label>
                    <input type="text" class="form-control">
                </div>
                <!-- manipulasi  -->
                <div class="col-md-6">
                    <label for="" class="pt-2">Manipulasi User Online</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-md-12 d-flex justify-content-end mt-3">
                    <label for="">&nbsp;</label><br>
                    <button class="btn btn-danger btn-rounded" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                    &nbsp;
                    <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
        <form action="">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum
                        laborum ut ipsa nam quod numquam iste, alias corporis. Corrupti doloremque velit dolores
                        molestias qui quos expedita perspiciatis, ad consequatur?</div>
                </div>
                @for ($i = 1; $i <= 10; $i++)

                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Manipulasi Top Order #{{ $i }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">User</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Amount Order</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Count Order</label>
                        <input type="text" class="form-control">
                    </div>

                @endfor
                <div class="col-md-12 d-flex justify-content-end mt-3">
                    <label for="">&nbsp;</label><br>
                    <button class="btn btn-danger btn-rounded" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                    &nbsp;
                    <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
        <form action="">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum
                        laborum ut ipsa nam quod numquam iste, alias corporis. Corrupti doloremque velit dolores
                        molestias qui quos expedita perspiciatis, ad consequatur?</div>
                </div>
                @for ($i = 1; $i <= 10; $i++)

                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Manipulasi Top Deposit #{{ $i }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">User</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Amount Order</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Count Order</label>
                        <input type="text" class="form-control">
                    </div>

                @endfor
                <div class="col-md-12 d-flex justify-content-end mt-3">
                    <label for="">&nbsp;</label><br>
                    <button class="btn btn-danger btn-rounded" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                    &nbsp;
                    <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
        <form action="">
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="alert alert-info">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa earum
                        laborum ut ipsa nam quod numquam iste, alias corporis. Corrupti doloremque velit dolores
                        molestias qui quos expedita perspiciatis, ad consequatur?</div>
                </div>
                @for ($i = 1; $i <= 10; $i++)

                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Manipulasi Top Service #{{ $i }}</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">User</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Amount Order</label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- manipulasi  -->
                    <div class="col-md-3">
                        <label for="" class="pt-2">Count Order</label>
                        <input type="text" class="form-control">
                    </div>

                @endfor
                <div class="col-md-12 d-flex justify-content-end mt-3">
                    <label for="">&nbsp;</label><br>
                    <button class="btn btn-danger btn-rounded" type="reset"><i class="fa fa-refresh"></i> Reset</button>
                    &nbsp;
                    <button class="btn btn-primary btn-rounded" type="submit"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>