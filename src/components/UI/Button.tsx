import { ButtonHTMLAttributes, ReactNode } from "react";
import { FaSpinner } from "react-icons/fa";

interface ButtonProps extends ButtonHTMLAttributes<HTMLButtonElement> {
  loading?: boolean;
  children: ReactNode;
}

export default function Button({ loading, children, ...rest }: ButtonProps) {
  return (
    <button className="hover:brightness-100 max-w-xl bg-cyan-800 rounded-lg border-0 p-2 hover:svg:animate-spin" disabled={loading} {...rest}>
      { loading ? (
        <FaSpinner color="#FFF" size={16} />
      ) : (
        <a className="text-white text-center">{children}</a>
      ) }
    </button>
  );
}
