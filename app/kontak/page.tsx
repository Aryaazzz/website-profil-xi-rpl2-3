import Image from "next/image";
import Link from "next/link";

const members = [
  { name: "Arya pamukluhur prabawa", email: "pamuklparya@gmail.com", instagram: "@aryaappl", image: "/profiles/arya.jpeg" },
  { name: "Yeni dianita ", email: "Yeni dianita ", instagram: "Yeni dianita ", image: "/profiles/yeni.jpeg" },
  { name: "Alifa Zallfa Nafisa", email: "zallfaalifa36@gmail.com", instagram: "@l1paoa", image: "/profiles/alifa.jpeg" },
  { name: "M.Afrizal Rinata", email: "afrizalrizalr3@gmail.com", instagram: "@mhammad_afrizall", image: "/profiles/afrizal.jpeg" },
];

export default function ContactPage() {
  return (
    <main className="min-h-screen bg-white text-gray-900">
      <section className="px-6 py-24">
        <div className="mx-auto max-w-5xl">
          <Link href="/" className="text-sm font-medium text-blue-600 hover:underline">
            ← Kembali ke Home
          </Link>

          <div className="mt-12">
            <p className="font-semibold text-blue-600">CONTACT</p>

            <h1 className="mt-3 text-4xl font-bold md:text-6xl">Hubungi Kami</h1>

            <p className="mt-6 max-w-2xl text-lg leading-8 text-gray-600">Punya pertanyaan atau ingin mengetahui lebih lanjut tentang kelompok kami? Silakan hubungi kami melalui informasi berikut.</p>
          </div>

          <div className="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            {members.map((member) => (
              <div key={member.email} className="rounded-2xl border p-6 transition hover:-translate-y-1 hover:shadow-lg">
                <Image src={member.image} alt={`Foto profil ${member.name}`} width={80} height={80} className="h-20 w-20 rounded-full object-cover" />

                <h2 className="mt-5 font-bold">{member.name}</h2>

                <p className="mt-4 text-sm font-medium text-gray-500">Email</p>

                <a href={`mailto:${member.email}`} className="mt-1 block break-words text-sm text-blue-600 hover:underline">
                  {member.email}
                </a>

                <p className="mt-4 text-sm font-medium text-gray-500">Instagram</p>

                <a href={`https://instagram.com/${member.instagram.slice(1)}`} target="_blank" rel="noopener noreferrer" className="mt-1 block text-sm text-blue-600 hover:underline">
                  {member.instagram}
                </a>
              </div>
            ))}
          </div>

          <div className="mt-8 rounded-2xl bg-blue-600 p-8 text-white">
            <h2 className="text-2xl font-bold">Mari terhubung dengan kami</h2>

            <p className="mt-3 max-w-xl text-blue-100">Kami terbuka untuk komunikasi, kolaborasi, maupun pertanyaan mengenai kelompok kami.</p>

            <a href="mailto:email@example.com" className="mt-6 inline-block rounded-full bg-white px-6 py-3 font-semibold text-blue-600 hover:bg-blue-50">
              Kirim Email
            </a>
          </div>
        </div>
      </section>
    </main>
  );
}
