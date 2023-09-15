import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MonPremierComponentComponent } from './mon-premier-component/mon-premier-component.component';

const routes: Routes = [
  {path: "presences", component: MonPremierComponentComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
