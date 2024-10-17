<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your head content here -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Gejala</title>
    <!-- Include CSS files here -->
</head>
<body>
    <main id="main" class="main">
        <div class="container">
            <form action="{{ url('aksi_tambah') }}" method="POST">
                @csrf <!-- CSRF Token for security -->
                <div class="pagetitle">
                    <h1>Order</h1>
                </div><!-- End Page Title -->

                <section class="section">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <!-- General Form Elements -->

                                    <div class="mb-3 mt-3">
                                        <label for="namaG" class="form-label">Gejala</label>
                                        <input class="form-control" id="namaG" name="namaG" required>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="namaM" class="form-label">Masalah</label>
                                        <input class="form-control" id="namaM" name="namaM" required>
                                    </div>

                                    <div class="mb-3 mt-3">
                                        <label for="namaS" class="form-label">Solusi</label>
                                        <input class="form-control" id="namaS" name="namaS" required>
                                    </div>

                                    <div class="row mb-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </main>

    <!-- Include JS files here -->
</body>
</html>
