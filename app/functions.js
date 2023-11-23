/** @format */

// /* @format */

// const radio = document.querySelectorAll('input[name="choice-kelas"]');

// radio.forEach((item) => {
// 	item.addEventListener("click", () => {
// 		const getValue = item.value;
// 		const harga = document.querySelector("#harga");

// 		if (getValue === "reguler") {
// 			harga.innerText = "100000";
// 			console.log("berhasil ", getValue);
// 		} else if (getValue === "eksekutif") {
// 			harga.innerText = "300000";
// 			console.log("berhasil ", getValue);
// 		}
// 		console.log(getValue);
// 	});
// });

const cetakTiket = () => {
	const btn = document.querySelector(".cetak-button");
	btn.style.visibility = 'hidden';
	window.print();
	btn.style.visibility = 'visible';
};

function makeCode(length) {
	let result = "";
	const characters =
		"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	const charactersLength = characters.length;
	let counter = 0;
	while (counter < length) {
		result += characters.charAt(Math.floor(Math.random() * charactersLength));
		counter += 1;
	}
	return result;
}

const generateBarCode = () => {
	let kodeJadwal = document.querySelector("#kode-jadwal").innerHTML;
	let noTiket = document.querySelector("#no-tiket").innerHTML;
	let noKursi = document.querySelector("#no-kursi").innerHTML;
	let kodeBus = document.querySelector("#kode-bus").innerHTML;

	let text = kodeJadwal + "-" + noTiket + "-" + noKursi + "-" + kodeBus;
	JsBarcode("#barcode", text);

	return generateBarCode;
};

const bc= (generateBarCode());
