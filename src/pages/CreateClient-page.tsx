import { FormEvent, useState } from "react";
import { toast } from "react-toastify";
import Button from "../components/UI/Button";
import TextInput from "../components/UI/TextInput";

export default function CreateClient() {
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [phone, setPhone] = useState("");
  const [address, setAddress] = useState("");

  const [loading, setLoading] = useState(false);

  async function handleCreation(event: FormEvent) {
    event.preventDefault();

    if (name === "" || email === "" || phone === "" || address === "") {
      toast.warning("Preencha todos os campos.");
      return;
    }

    setLoading(true);

    let data = {
      name,
      email,
      phone,
      address,
    };

    // REQUISIÇÃO COM AXIOS

    setLoading(true);
  }

  return (
    <div>
      <h1>Criando seu Cliente</h1>
      <form onSubmit={handleCreation}>
        <TextInput
          placeholder="Digite seu Nome"
          type={"text"}
          value={name}
          onChange={(e) => setName(e.target.value)}
        />
        <TextInput
          placeholder="Digite seu Email"
          type={"email"}
          value={email}
          onChange={(e) => setEmail(e.target.value)}
        />
        <TextInput
          placeholder="Digite seu Telefone"
          type={"tel"}
          value={phone}
          onChange={(e) => setPhone(e.target.value)}
        />
        <TextInput
          placeholder="Digite seu Endereço"
          type={"text"}
          value={address}
          onChange={(e) => setAddress(e.target.value)}
        />

        <Button loading={loading} type="submit">
          Submit
        </Button>
      </form>
    </div>
  );
}
