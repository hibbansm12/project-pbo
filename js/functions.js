/** @format */

const radio = document.querySelectorAll('input[name="choice-kelas"]');

radio.forEach((item) => {
	item.addEventListener("click", () => {
		const getValue = item.value;
		const harga = document.querySelector("#harga");

		if (getValue === "reguler") {
			harga.innerText = "100000";
			console.log("berhasil ", getValue);
		} else if (getValue === "eksekutif") {
			harga.innerText = "300000";
			console.log("berhasil ", getValue);
		}
		console.log(getValue);
	});
});
