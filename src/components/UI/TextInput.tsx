import { InputHTMLAttributes } from "react";

interface InputProps extends InputHTMLAttributes<HTMLInputElement> {}

export default function TextInput({ ...rest }: InputProps) {
  return (
    <input type='text' className="mb-px h-10 rounded-lg bg-slate-900 text-white p-1 border border-solid border-black placeholder:text-white/80" {...rest} />
  )
}
