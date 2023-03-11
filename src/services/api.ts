import axios from "axios";

export function setupAPIClient() {
  const api = axios.create({
    baseURL: 'http://127.0.0.1/users/'
  })

  return api
}