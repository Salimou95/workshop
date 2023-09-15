import { Camera, CameraResultType } from "@capacitor/camera";

export class PhotoService {
  public photosCamera: Photo[] = [];
  public async takePicture() {
    const image = await Camera.getPhoto({
      quality: 90,
      allowEditing: true,
      resultType: CameraResultType.Uri,
    });

    this.photosCamera.unshift({
      filepath: 'img-' + Date.now(),
      webviewPath: image.webPath
    });
  }
}

export interface Photo {
  filepath: string;
  webviewPath: string;
}
