import './bootstrap';

window.addEventListener("load", (event) => {
    document.querySelector("#spinner").classList.add("hidden");
});

document.querySelector("#ollamaPrompt").addEventListener("submit", (e) => {
   document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#response").classList.add("hidden");
});

document.querySelector("#promptText").addEventListener("keyup", (e) => {
    if(document.querySelector("#promptText").value.length > 0) {
        document.querySelector("#submit").removeAttribute('disabled');
    }else{
        document.querySelector("#submit").setAttribute("disabled", true);
    }

});


window.copyToClipboard = async() => {

    const generated = document.querySelector("#response--body").innerHTML;
    const formatted = htmltoText(generated)
    console.log(formatted)

    try {
        await navigator.clipboard.writeText(formatted);
        console.log('Content copied to clipboard');
    } catch (err) {
        console.error('Failed to copy: ', err);
    }
}


window.htmltoText = (string) => {
    let text = string;
    text = text.replace(/\n/gi, "");
    text = text.replace(/<style([\s\S]*?)<\/style>/gi, "");
    text = text.replace(/<script([\s\S]*?)<\/script>/gi, "");
    text = text.replace(/<a.*?href="(.*?)[\?\"].*?>(.*?)<\/a.*?>/gi, " $2 $1 ");
    text = text.replace(/<\/div>/gi, "\n\n");
    text = text.replace(/<\/li>/gi, "\n");
    text = text.replace(/<li.*?>/gi, "  *  ");
    text = text.replace(/<\/ul>/gi, "\n\n");
    text = text.replace(/<\/p>/gi, "\n\n");
    text = text.replace(/<br\s*[\/]?>/gi, "\n");
    text = text.replace(/<[^>]+>/gi, "");
    text = text.replace(/^\s*/gim, "");
    text = text.replace(/ ,/gi, ",");
    text = text.replace(/ +/gi, " ");
    text = text.replace(/\n+/gi, "\n\n");
    text = text.replace(/;/gi, ";\n\n");
    return text;
};
