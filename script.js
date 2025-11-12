document.getElementById("auditForm").addEventListener("submit", function(e) {
    const requiredInputs = this.querySelectorAll("[required]");
    let valid = true;

    requiredInputs.forEach(input => {
        if (input.type === "radio") {
            const radios = this.querySelectorAll(`input[name="${input.name}"]`);
            const checked = Array.from(radios).some(r => r.checked);
            if (!checked) valid = false;
        } else if (!input.value.trim()) {
            valid = false;
        }
    });

    if (!valid) {
        e.preventDefault();
        alert("Semua kolom wajib diisi sebelum submit!");
    }
});
