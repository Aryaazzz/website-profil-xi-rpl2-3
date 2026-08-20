import Link from "next/link";

export default function ProfilePage() {
  return (
    <main className="profile-page min-h-screen overflow-hidden text-slate-900">
      <section className="relative px-6 pb-24 pt-12 md:pt-20">
        <div className="profile-grid absolute inset-0 -z-0 opacity-70" />
        <div className="mx-auto max-w-4xl">
          <Link
            href="/"
            className="profile-back-link relative z-10 inline-flex items-center gap-2 text-sm font-semibold text-blue-700"
          >
            <span aria-hidden="true">←</span> Kembali ke Home
          </Link>

          <div className="relative z-10 mt-20" data-aos="fade-up">
            <p className="font-semibold uppercase tracking-[0.28em] text-blue-700">
              Profile kelompok
            </p>

            <h1 className="mt-4 max-w-3xl text-4xl font-bold tracking-tight text-slate-950 md:text-6xl">
              Tentang kelompok kami
              <span className="block text-blue-600">yang terus bertumbuh.</span>
            </h1>

            <p className="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
              Kami adalah kelompok yang terdiri dari individu dengan latar
              belakang, kemampuan, dan karakter yang berbeda, tetapi memiliki
              tujuan yang sama.
            </p>
          </div>

          <div className="relative z-10 mt-16 grid gap-6 md:grid-cols-2">
            <div
              className="profile-card group rounded-3xl bg-white/80 p-8 shadow-sm ring-1 ring-slate-200/80 backdrop-blur-sm"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div className="mb-10 flex items-start justify-between">
                <span className="profile-icon">01</span>
                <span className="text-sm font-semibold uppercase tracking-widest text-blue-600">
                  Arah
                </span>
              </div>
              <h2 className="text-2xl font-bold text-slate-950">Visi</h2>

              <p className="mt-4 leading-7 text-slate-600">
                Menjadi kelompok yang solid, kreatif, dan mampu memberikan
                kontribusi positif melalui kerja sama dan inovasi.
              </p>
            </div>

            <div
              className="profile-card group rounded-3xl bg-blue-600 p-8 text-white shadow-sm shadow-blue-200"
              data-aos="fade-up"
              data-aos-delay="220"
            >
              <div className="mb-10 flex items-start justify-between">
                <span className="profile-icon profile-icon-light">02</span>
                <span className="text-sm font-semibold uppercase tracking-widest text-blue-100">
                  Langkah
                </span>
              </div>
              <h2 className="text-2xl font-bold">Misi</h2>

              <p className="mt-4 leading-7 text-blue-50">
                Membangun kerja sama yang baik, mengembangkan potensi setiap
                anggota, dan menyelesaikan setiap tantangan bersama.
              </p>
            </div>
          </div>

          <div
            className="profile-story relative z-10 mt-6 rounded-3xl p-8 md:p-10"
            data-aos="fade-up"
            data-aos-delay="320"
          >
            <p className="text-sm font-semibold uppercase tracking-widest text-blue-700">
              Cerita kami
            </p>
            <h2 className="mt-3 text-2xl font-bold text-slate-950">Tentang Kami</h2>

            <p className="mt-4 max-w-3xl leading-8 text-slate-600">
              Website ini menjadi media untuk memperkenalkan kelompok kami,
              anggota yang tergabung di dalamnya, serta informasi yang dapat
              membantu orang lain mengenal kami lebih dekat.
            </p>
          </div>
        </div>
      </section>
    </main>
  );
}