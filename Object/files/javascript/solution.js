class Files{
    constructor(fileName, fileExtension, content, parentFolder){
        this.fileName = fileName;
        this.fileExtension = this.validateFileExtension(fileExtension);
        this.content = content;
        this.parentFolder = parentFolder;
    }

    getLifetimeBandwidthSize(){
        let size = 25 * this.content.length;

        if(size >= 1000){
            size /= 1000;
            return size.toString() + 'GB';
        } else {
            return size.toString() + 'MB';
        }
    }

    prependContent(data){
        return this.content = data + this.content;
    }

    addContent(data, position){
        return this.content = this.content.substring(0, position) + data + this.content.substring(position);
    }

    showFileLocation(){
        return `${this.parentFolder} > ${this.fileName}${this.fileExtension}`;
    }

    validateFileExtension(fileExtension){
        let validateExtensions = ['.word', '.png', '.mp4', '.pdf'];

        if(validateExtensions.includes(fileExtension)){
            return fileExtension;
        } else {
            return '.txt';
        }
    }
}

module.exports = Files;