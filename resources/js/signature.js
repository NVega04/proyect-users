import { default as SignaturePad } from "signature_pad";

const canvaSignature = document.querySelector("#signature");
const newSignature = new SignaturePad(canvaSignature);

newSignature.addEventListener("endStroke", () => {
    document.getElementById("id_signature").value = newSignature.toDataURL();
});