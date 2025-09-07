<!DOCTYPE html>
<html>
<head>
	<title>WEB AR dengan Teks</title>

	<!-- Mengimpor A-Frame dan AR.js library -->
	<script src="https://aframe.io/releases/1.4.0/aframe.min.js"></script>
	<script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
</head>
<body>

<!-- Membuat a-scene untuk rendering VR/AR dengan AR.js -->
<a-scene embedded arjs>
    <a-assets>
		<!-- Mendefinisikan gambar yang akan digunakan sebagai tekstur -->
		<img id="gambark1" src="/Pokemon-Go/assets/gambar/POK.1.png">
		<img id="gambark2" src="/Pokemon-Go/assets/gambar/POK.2.png">
    <img id="gambark3" src="/Pokemon-Go/assets/gambar/POK.3.png">
    <img id="gambark4" src="/Pokemon-Go/assets/gambar/POK.4.png">
    <img id="gambark5" src="/Pokemon-Go/assets/gambar/POK.5.png">
    <img id="gambark6" src="/Pokemon-Go/assets/gambar/POK.6.png">
    <img id="gambark7" src="/Pokemon-Go/assets/gambar/POK.7.png">
    <img id="gambark8" src="/Pokemon-Go/assets/gambar/POK.8.png">
    <img id="gambark9" src="/Pokemon-Go/assets/gambar/POK.9.png">
    <img id="gambark10" src="/Pokemon-Go/assets/gambar/POK.10.png">
    <img id="gambark11" src="/Pokemon-Go/assets/gambar/POK.11.png">
    <img id="gambark12" src="/Pokemon-Go/assets/gambar/POK.12.png">
    <img id="gambark13" src="/Pokemon-Go/assets/gambar/POK.13.png">
    <img id="gambark14" src="/Pokemon-Go/assets/gambar/POK.14.png">
    <img id="gambark15" src="/Pokemon-Go/assets/gambar/POK.15.png">
    <img id="gambark16" src="/Pokemon-Go/assets/gambar/POK.16.png">
    <img id="gambark17" src="/Pokemon-Go/assets/gambar/POK.17.png">
    <img id="gambark18" src="/Pokemon-Go/assets/gambar/POK.18.png">
    
	</a-assets>
	
	<!-- Marker pertama dengan pola kustom "pattern-POK.1.patt" -->
	<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.1.patt">
		<!-- Objek 3D terkait dengan marker 1 -->
		<a-box position="0 0.5 0" material="src:#gambark1" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
		<!-- Teks yang akan muncul saat marker 1 terdeteksi -->
		<a-entity position="2 0 0" rotation="-90 0 0">
		    <a-text id="text1" value="Aliran Syi'ah memiliki beberapa konsep pokok yang berbeda dengan ajaran aliran kalam lainnya. Salah satu konsep penting dalam Syi'ah adalah Imamah. Berdasarkan konsep ini, Imam memiliki kedudukan yang lebih tinggi daripada nabi" align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
		</a-entity>
	</a-marker>
	
	<!-- Marker kedua dengan pola kustom "pattern-POK.2.patt" -->
	<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.2.patt">
		<!-- Objek 3D terkait dengan marker 2 -->
		<a-box position="0 0.5 0" material="src:#gambark2" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
		<!-- Teks yang akan muncul saat marker 2 terdeteksi -->
		<a-entity position="2 0 0" rotation="-90 0 0">
		    <a-text id="text2" value="Menolak konsep Imamah dan percaya pada musyawarah (syura) sebagai metode pemilihan pemimpin." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
		</a-entity>
	</a-marker>

  <!-- Marker ketiga dengan pola kustom "pattern-POK.3.patt" -->
	<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.3.patt">
		<!-- Objek 3D terkait dengan marker 3 -->
		<a-box position="0 0.5 0" material="src:#gambark3" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
		<!-- Teks yang akan muncul saat marker 3 terdeteksi -->
		<a-entity position="2 0 0" rotation="-90 0 0">
		    <a-text id="text3" value="A. Perlindungan diri dengan menyembunyikan keyakinan ketika menghadapi bahaya.
        B. Peristiwa di mana Nabi Muhammad SAW diduga mengangkat Ali sebagai penerusnya." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
		</a-entity>
	</a-marker>
	
	<!-- Marker keempat dengan pola kustom "pattern-POK.4.patt" -->
	<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.4.patt">
		<!-- Objek 3D terkait dengan marker 4 -->
		<a-box position="0 0.5 0" material="src:#gambark4" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
		<!-- Teks yang akan muncul saat marker 4 terdeteksi -->
		<a-entity position="2 0 0" rotation="-90 0 0">
		    <a-text id="text4" value="Aliran Murji'ah memiliki pandangan yang berbeda terkait hubungan antara iman dan amal. Berdasarkan pandangan ini, beberapa pernyataan berikut dianggap benar oleh aliran Murji'ah." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
		</a-entity>
	</a-marker>

  <!-- Marker kelima dengan pola kustom "pattern-POK.5.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.5.patt">
    <!-- Objek 3D terkait dengan marker 5 -->
    <a-box position="0 0.5 0" material="src:#gambark5" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 5 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text5" value="Penilaian amal tidak mempengaruhi status iman seseorang." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker keenam dengan pola kustom "pattern-POK.6.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.6.patt">
    <!-- Objek 3D terkait dengan marker 6 -->
    <a-box position="0 0.5 0" material="src:#gambark6" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 6 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text6" value="Dalam sejarah perkembangan aliran kalam, Murji'ah muncul sebagai salah satu kelompok yang berpendapat tentang iman dan amal. Dua pernyataan berikut yang benar terkait dengan sejarah dan perkembangan aliran Murji'ah:" align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker ketujuh dengan pola kustom "pattern-POK.7.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.7.patt">
    <!-- Objek 3D terkait dengan marker 7 -->
    <a-box position="0 0.5 0" material="src:#gambark7" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 7 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text7" value="Aliran Qodariyah dalam ilmu kalam menekankan konsep tertentu tentang takdir dan kehendak manusia. Berikut ini pernyataan yang paling akurat menggambarkan pandangan aliran Qodariyah tentang hubungan antara kehendak manusia dan kekuasaan Tuhan:" align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker kedelapan dengan pola kustom "pattern-POK.8.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.8.patt">
    <!-- Objek 3D terkait dengan marker 8 -->
    <a-box position="0 0.5 0" material="src:#gambark8" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 8 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text8" value="Dalam diskusi mengenai aliran Qodariyah, berikut ini pernyataan yang paling tepat mengenai pandangan mereka tentang keadilan Tuhan:" align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker kesembilan dengan pola kustom "pattern-POK.9.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.9.patt">
    <!-- Objek 3D terkait dengan marker 9 -->
    <a-box position="0 0.5 0" material="src:#gambark9" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 9 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text9" value="Konsep bahwa segala sesuatu sudah ditentukan oleh Tuhan sebelumnya dan manusia tidak memiliki kontrol atas keputusan mereka." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker kesepuluh dengan pola kustom "pattern-POK.10.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.10.patt">
    <!-- Objek 3D terkait dengan marker 10 -->
    <a-box position="0 0.5 0" material="src:#gambark10" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 10 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text10" value="Pernyataan berikut ini berkaitan dengan ajaran Jabariyah:
1. Manusia tidak memiliki kehendak bebas dalam perbuatannya.
2. Segala sesuatu telah ditentukan oleh Allah, dan manusia hanya menjalankan apa yang sudah ditetapkan.
3. Manusia tetap bertanggung jawab atas perbuatannya di akhirat." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker kesebelas dengan pola kustom "pattern-POK.11.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.11.patt">
    <!-- Objek 3D terkait dengan marker 11 -->
    <a-box position="0 0.5 0" material="src:#gambark11" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 11 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text11" value="Ahmad meyakini bahwa segala tindakannya, baik atau buruk, telah ditentukan oleh Allah sejak awal, dan ia tidak dapat mengubahnya. Namun, ia merasa bersalah atas dosa-dosanya dan berharap Allah mengampuninya." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker kedua belas dengan pola kustom "pattern-POK.12.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.12.patt">
    <!-- Objek 3D terkait dengan marker 12 -->
    <a-box position="0 0.5 0" material="src:#gambark12" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 12 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text12" value="Semua perbuatan manusia adalah kehendak Allah" align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker ketiga belas dengan pola kustom "pattern-POK.13.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.13.patt">
    <!-- Objek 3D terkait dengan marker 13 -->
    <a-box position="0 0.5 0" material="src:#gambark13" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 13 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text13" value="Ajaran aliran Mu'tazilah sangat menekankan kebebasan manusia dalam menentukan perbuatannya dan menolak paham determinisme. Menurut Mu'tazilah, bagaimana hubungan antara kebebasan manusia dengan konsep keadilan Allah?" align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker keempat belas dengan pola kustom "pattern-POK.14.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.14.patt">
    <!-- Objek 3D terkait dengan marker 14 -->
    <a-box position="0 0.5 0" material="src:#gambark14" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 14 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text14" value="Aliran Mu'tazilah dikenal dengan prinsip “al-Manzilah bainal manzilatain” (posisi di antara dua posisi). Penerapan prinsip ini dalam menghukumi seorang Muslim yang melakukan dosa besar ialah…" align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker kelima belas dengan pola kustom "pattern-POK.15.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.15.patt">
    <!-- Objek 3D terkait dengan marker 15 -->
    <a-box position="0 0.5 0" material="src:#gambark15" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 15 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text15" value="A. Keyakinan bahwa Allah wajib memberi pahala kepada yang taat dan hukuman kepada yang maksiat.
B. Keyakinan bahwa Allah Maha Esa tanpa sifat-sifat yang menempel pada-Nya." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker keenam belas dengan pola kustom "pattern-POK.16.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.16.patt">
    <!-- Objek 3D terkait dengan marker 16 -->
    <a-box position="0 0.5 0" material="src:#gambark16" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 16 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text16" value="Dalam ajaran Asy'ariyah, akal manusia memiliki peran yang penting namun terbatas dalam memahami ajaran agama. Konsep ini memengaruhi pemahaman tentang sifat-sifat Allah yakni.." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker ketujuh belas dengan pola kustom "pattern-POK.17.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.17.patt">
    <!-- Objek 3D terkait dengan marker 17 -->
    <a-box position="0 0.5 0" material="src:#gambark17" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 17 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text17" value="Maturidiyah memiliki pendekatan yang berbeda dengan Asy'ariyah dalam hal penggunaan akal. Perbedaan ini terlihat dalam konsep kebebasan kehendak manusia menurut kedua aliran tersebut." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<!-- Marker kedelapan belas dengan pola kustom "pattern-POK.18.patt" -->
<a-marker preset="custom" type="pattern" url="/Pokemon-Go/assets/marker/pattern-POK.18.patt">
    <!-- Objek 3D terkait dengan marker 18 -->
    <a-box position="0 0.5 0" material="src:#gambark18" animation="property:rotation;from:0 0 0;to: 360 360 360; loop:true"></a-box>
    <!-- Teks yang akan muncul saat marker 18 terdeteksi -->
    <a-entity position="2 0 0" rotation="-90 0 0">
        <a-text id="text18" value="Akal manusia memiliki kemampuan terbatas dalam menetapkan baik dan buruk, dan harus mengacu pada wahyu untuk pemahaman yang sempurna." align="center" color="#FFFFFF" scale="0.5 0.5 0.5" visible="false"></a-text>
    </a-entity>
</a-marker>

<script>
  // Mengubah visibilitas teks berdasarkan status marker
  document.querySelectorAll('a-marker').forEach(marker => {
    marker.addEventListener('markerFound', function() {
      this.querySelector('a-text').setAttribute('visible', 'true');
    });
    marker.addEventListener('markerLost', function() {
      this.querySelector('a-text').setAttribute('visible', 'false');
    });
  });
</script>

	<!-- Elemen suara pertama untuk marker 1 -->
	<a-sound
		id="sound1"
		src="/Pokemon-Go/assets/mp3/POK.1.mp3"
		loop="false"
		volume="1"
	></a-sound>
	
	<!-- Elemen suara kedua untuk marker 2 -->
	<a-sound
		id="sound2"
		src="/Pokemon-Go/assets/mp3/POK.2.mp3"
		loop="false"
		volume="1"
	></a-sound>

	<!-- Menambahkan entitas kamera untuk melihat adegan -->
	<a-entity camera></a-entity>
</a-scene>

<script>
    document.addEventListener("DOMContentLoaded", () => {
      // Mendapatkan elemen suara dan teks
      const sound1 = document.getElementById("sound1");
      const sound2 = document.getElementById("sound2");
      const text1 = document.getElementById("text1");
      const text2 = document.getElementById("text2");

      // Mengambil marker
      const marker1 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.1.patt"]');
      const marker2 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.2.patt"]');
      const marker3 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.3.patt"]');
      const marker4 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.4.patt"]');
      const marker5 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.5.patt"]');
      const marker6 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.6.patt"]');
      const marker7 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.7.patt"]');
      const marker8 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.8.patt"]');
      const marker9 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.9.patt"]');
      const marker10 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.10.patt"]');
      const marker11 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.11.patt"]');
      const marker12 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.12.patt"]');
      const marker13 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.13.patt"]');
      const marker14 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.14.patt"]');
      const marker15 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.15.patt"]');
      const marker16 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.16.patt"]');
      const marker17 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.17.patt"]');
      const marker18 = document.querySelector('a-marker[url="/Pokemon-Go/assets/marker/pattern-POK.18.patt"]');
 
//---------------------------------------------------------------      
      // Menambahkan event listener untuk marker 1
      marker1.addEventListener("markerFound", () => {
        if (sound1 && sound1.components.sound) {
          sound1.components.sound.playSound();
        }
        if (text1) {
          text1.setAttribute("visible", "true");
        }
      });

      marker1.addEventListener("markerLost", () => {
        if (sound1 && sound1.components.sound) {
          sound1.components.sound.stopSound();
        }
        if (text1) {
          text1.setAttribute("visible", "false");
        }
      });
//----------------------------------------------------------------
      // Menambahkan event listener untuk marker 2
      marker2.addEventListener("markerFound", () => {
        if (sound2 && sound2.components.sound) {
          sound2.components.sound.playSound();
        }
        if (text2) {
          text2.setAttribute("visible", "true");
        }
      });

      marker2.addEventListener("markerLost", () => {
        if (sound2 && sound2.components.sound) {
          sound2.components.sound.stopSound();
        }
        if (text2) {
          text2.setAttribute("visible", "false");
        }
      });
    });
</script>

</body>
</html>
