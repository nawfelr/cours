import { NgClass } from '@angular/common';
import { Component } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})
export class PostComponent {
  h4 = 'Titre';
  contenu = 'Contenu';
  com ="";
  likeVisible: boolean = true;

  toggleLike() {
    this.likeVisible = !this.likeVisible;
  }
}
