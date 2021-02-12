$("#kotak_suara").on("click", function (e) {
	// hentikan default href
	e.preventDefault();
	const href = $(this).attr("href");
	Swal.fire({
	  title: "Apakah Anda Yakin?",
	  text: "Akan Menghapus Data Ini..?",
	  icon: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#3085d6",
	  cancelButtonColor: "#d33",
	  confirmButtonText: "Pilih",
	  cancelButtonText: "Batal",
	}).then((result) => {
	  if (result.isConfirmed) {
		// document.location.href = href
		document.location.href = href;
	  }
	});
  });