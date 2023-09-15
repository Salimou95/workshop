import { NONE_TYPE } from '@angular/compiler';
import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})
export class PostComponent {
  title: string = "titre"
  content: string = "contenue"
  msg = ""
  active: boolean = false;

  @Input()titlePost;
  @Input()contentPost;

  // like(){
  //   document.getElementById('like').style.display ="none";
  //   document.getElementById('nolike').style.display ="block";
  // }

  // nolike(){
  //   document.getElementById('nolike').style.display ="none";
  //   document.getElementById('like').style.display ="block";
  // }

  like(){
    if (this.active === true){
      this.active =false
    }else (this.active = true)

}
}
