import { Component, OnInit } from '@angular/core';
import {PetService} from "./pet.service";

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
providers: [PetService]
})
export class AppComponent implements OnInit {
  title = 'app';

    pets: any[];

  constructor(private petService:PetService){

  }

  ngOnInit(){
    this.petService.getPets().subscribe(responsePets => this.pets = responsePets);
  }


}
