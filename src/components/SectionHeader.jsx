export default function SectionHeader({ index, title }) {
  return (
    <div className="mb-14">
      <p className="font-mono text-sm font-medium uppercase tracking-[0.2em] text-accent">{index}</p>
      <h2 className="mt-3 font-display text-3xl font-semibold tracking-tight md:text-5xl">{title}</h2>
    </div>
  );
}