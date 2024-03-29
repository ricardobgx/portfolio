import { SkillType } from "../SkillType";
import { skillTypes } from "../../static/data/skills";

export function Skills() {
  return (
    <section className="flex flex-col items-center justify-center gap-20 max-w-screen-xl min-h-[100vh] p-10 md:p-20 lg:p-0">
      <h1 className="text-3xl font-bold font-display">Skills</h1>
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
        {skillTypes.map((skillType) => (
          <SkillType key={skillType.name} skillType={skillType} />
        ))}
      </div>
    </section>
  );
}
