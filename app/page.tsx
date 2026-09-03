import Link from "next/link";

const members = [
  {
    id: 1,
    name: "Arya Pamukluhur Prabawa ",
    role: "Project Manager",
  },
  {
    id: 2,
    name: "Alifa zallfa nafisa",
    role: "Developer 1",
  },
  {
    id: 3,
    name: "Afrizal Rinata",
    role: "Developer 2",
  },
  {
    id: 4,
    name: "Yeni Dianita",
    role: "Developer 3",
  },
];

export default function Home() {
  return (
    <main className="min-h-screen bg-white text-gray-900">
      {/* Navbar */}
      <nav className="fixed top-0 z-50 w-full border-b bg-white/80 backdrop-blur">
        <div className="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
          <Link href="/" className="text-xl font-bold">
            KELOMPOK
          </Link>

          <div className="hidden gap-8 md:flex">
            <Link href="/" className="text-sm hover:text-blue-600">
              Home
            </Link>
            <Link href="/profile" className="text-sm hover:text-blue-600">
              Profile
            </Link>
            <Link href="/anggota" className="text-sm hover:text-blue-600">
              Anggota
            </Link>
            <Link href="/kontak" className="text-sm hover:text-blue-600">
              Kontak
            </Link>
          </div>
        </div>
      </nav>

      {/* Hero */}
      <section className="flex min-h-screen items-center justify-center px-6 pt-20">
        <div className="mx-auto max-w-4xl text-center">
          <p className="mb-4 text-sm font-semibold uppercase tracking-[0.3em] text-blue-600">Welcome to our group</p>

          <h1 className="text-5xl font-bold tracking-tight md:text-7xl">
            Bersama dalam
            <span className="block text-blue-600">Satu Tujuan</span>
          </h1>

          <p className="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600">Kami adalah sebuah kelompok yang terdiri dari individu-individu dengan semangat, tujuan, dan visi yang sama.</p>

          <div className="mt-10 flex justify-center gap-4">
            <Link href="/profile" className="rounded-full bg-blue-600 px-6 py-3 font-medium text-white transition hover:bg-blue-700">
              Tentang Kami
            </Link>

            <Link href="/anggota" className="rounded-full border border-gray-300 px-6 py-3 font-medium transition hover:bg-gray-100">
              Lihat Anggota
            </Link>
          </div>
        </div>
      </section>

      {/* About */}
      <section className="bg-gray-50 px-6 py-24">
        <div className="mx-auto max-w-6xl">
          <div className="max-w-2xl">
            <p className="font-semibold text-blue-600">TENTANG KAMI</p>

            <h2 className="mt-3 text-3xl font-bold md:text-4xl">Mengenal kelompok kami lebih dekat.</h2>

            <p className="mt-6 leading-8 text-gray-600">
              Kami percaya bahwa kolaborasi dan kerja sama dapat menghasilkan sesuatu yang lebih besar. Website ini dibuat sebagai tempat untuk mengenal kelompok kami, anggota kami, serta berbagai informasi mengenai kami.
            </p>

            <Link href="/profile" className="mt-8 inline-block font-semibold text-blue-600 hover:underline">
              Selengkapnya →
            </Link>
          </div>
        </div>
      </section>

      {/* Members */}
      <section className="px-6 py-24">
        <div className="mx-auto max-w-6xl">
          <div className="flex items-end justify-between">
            <div>
              <p className="font-semibold text-blue-600">OUR MEMBERS</p>

              <h2 className="mt-3 text-3xl font-bold md:text-4xl">Anggota Kami</h2>
            </div>

            <Link href="/anggota" className="hidden font-semibold text-blue-600 hover:underline md:block">
              Lihat semua →
            </Link>
          </div>

          <div className="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            {members.map((member) => (
              <div key={member.id} className="rounded-2xl border border-gray-200 p-6 transition hover:-translate-y-1 hover:shadow-lg">
                {/* Foto / Inisial */}
                <div className="mb-5 flex h-20 w-20 items-center justify-center rounded-full bg-blue-100 text-2xl font-bold text-blue-600">{member.name.charAt(0)}</div>

                {/* Nama */}
                <h3 className="font-bold">{member.name}</h3>

                {/* Jabatan */}
                <p className="mt-1 text-sm text-gray-500">{member.role}</p>
              </div>
            ))}
          </div>

          <Link href="/anggota" className="mt-8 inline-block font-semibold text-blue-600 hover:underline md:hidden">
            Lihat semua →
          </Link>
        </div>
      </section>

      {/* Contact CTA */}
      <section className="px-6 pb-24">
        <div className="mx-auto max-w-6xl overflow-hidden rounded-3xl bg-blue-600 px-6 py-16 text-center text-white md:px-16">
          <h2 className="text-3xl font-bold md:text-4xl">Ingin menghubungi kami?</h2>

          <p className="mx-auto mt-4 max-w-xl text-blue-100">Jangan ragu untuk menghubungi kami jika ingin mengetahui lebih lanjut mengenai kelompok kami.</p>

          <Link href="/kontak" className="mt-8 inline-block rounded-full bg-white px-6 py-3 font-semibold text-blue-600 transition hover:bg-blue-50">
            Hubungi Kami
          </Link>
        </div>
      </section>

      {/* Footer */}
      <footer className="border-t px-6 py-8">
        <div className="mx-auto flex max-w-6xl flex-col justify-between gap-4 text-sm text-gray-500 md:flex-row">
          <p>© 2026 Nama Kelompok. All rights reserved.</p>

          <div className="flex gap-6">
            <Link href="/profile" className="hover:text-gray-900">
              Profile
            </Link>
            <Link href="/anggota" className="hover:text-gray-900">
              Anggota
            </Link>
            <Link href="/kontak" className="hover:text-gray-900">
              Kontak
            </Link>
          </div>
        </div>
      </footer>
    </main>
  );
}
