

                <main id="main" class="main">
                    <div class="container">
                        <div class="pagetitle">
                            <h1>Gejala List</h1>
                            <nav>
                                <!-- You can include breadcrumb navigation here -->
                            </nav>
                        </div><!-- End Page Title -->

                        <section class="section">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <!-- Search Input -->
                                                <div class="search-container">
                                                    <label for="search">Search:</label>
                                                    <input type="text" id="search" placeholder="Enter keywords...">
                                                </div>
                                            </div>
         <a href="{{ url('tambah') }}">
		<button class="btn btn-success">Tambah</button>
  </a>

                                            <!-- Table with stripped rows -->
                                            <table class="table datatable" id="mitraTable">
                                                <thead>
                                                    <tr style="font-weight: bold; color: black; font-size: larger;">
                                                        <td align="center" scope="col">No</td>
                                                        <td align="center" scope="col">Kode</td>
                                                        <td align="center" scope="col">Gejala</td>
                                                        <td align="center" scope="col">Masalah</td>
                                                        <td align="center" scope="col">Solusi</td>
                                                        <td align="center" scope="col">hapus</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($gejala as $key => $item)
                                                        <tr>
                                                            <td align="center" scope="row">{{ $key + 1 }}</td>
                                                            <td align="center">{{ $item->Kode }}</td>
                                                            <td align="center">{{ $item->NamaG }}</td>
                                                            <td align="center">{{ $item->Masalah }}</td>
                                                            <td align="center">{{ $item->Solusi }}</td>
                                                            <td align="center">
                                                            <a href="{{ url('delete/' . $item->id_gejala) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </main><!-- End #main -->
            </div>
        </div>
    </div>

    <script>
        // Add JavaScript for search functionality
        document.getElementById('search').addEventListener('input', function() {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll('#mitraTable tbody tr');

            rows.forEach(row => {
                const rowData = row.textContent.toLowerCase();
                row.style.display = rowData.includes(searchValue) ? '' : 'none';
            });
        });
    </script>
</body>
