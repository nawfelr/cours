import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MonPremierComponentComponent } from './mon-premier-component/mon-premier-component.component';
import { EleveDetailComponent } from './eleve-detail/eleve-detail.component';

const routes: Routes = [
  {path:"presences", component:MonPremierComponentComponent},
  { path: "presences/:id", component:EleveDetailComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
