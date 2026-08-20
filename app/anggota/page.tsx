import Link from "next/link";

const members = [
  {
    name: "AryaArya Pamukluhur Prabawa  ",
    role: "Projek Manager",
    description: "Bertanggung jawab dalam koordinasi kelompok.",
  },
  {
    name: "Alifa Zallfa Nafisa",
    role: "Developer 1",
    description: "Membantu Menyelesaikan Di halaman Profil.",
  },
  {
    name: "Afrizal Rinata",
    role: "Developer 2",
    description: "Membantu menyelesaikan tugas di bagian halaman Kontak.",
  },
  {
    name: "Yeni Dianita",
    role: "Developer 3",
    description: "Membantu dalam pengembangan fitur profil.",
  },
];

export default function MembersPage() {
  return (
    <main className="min-h-screen bg-white text-gray-900">
      <section className="px-6 py-24">
        <div className="mx-auto max-w-6xl">
          <Link href="/" className="text-sm font-medium text-blue-600 hover:underline">
            ← Kembali ke Home
          </Link>

          <div className="mt-12">
            <p className="font-semibold text-blue-600">OUR MEMBERS</p>

            <h1 className="mt-3 text-4xl font-bold md:text-6xl">Anggota Kelompok</h1>

            <p className="mt-6 max-w-2xl text-lg leading-8 text-gray-600">Kenali orang-orang yang menjadi bagian dari kelompok kami.</p>
          </div>

          <div className="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            {members.map((member) => (
              <div key={member.name} className="rounded-2xl border border-gray-200 p-6 transition hover:-translate-y-1 hover:shadow-lg">
                <div className="flex h-24 w-24 items-center justify-center rounded-full bg-blue-100 text-3xl font-bold text-blue-600">{member.name.trim().charAt(0)}</div>

                <h2 className="mt-6 text-xl font-bold">{member.name}</h2>

                <p className="mt-1 text-sm font-medium text-blue-600">{member.role}</p>

                <p className="mt-4 text-sm leading-6 text-gray-600">{member.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>
    </main>
  );
}
