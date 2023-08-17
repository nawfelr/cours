import { ComponentFixture, TestBed } from '@angular/core/testing';
import { MonPremierComponentComponent } from './mon-premier-component.component';



describe('MonPremierComponentComponent', () => {
  let component: MonPremierComponentComponent;
  let fixture: ComponentFixture<MonPremierComponentComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [MonPremierComponentComponent]
    });
    fixture = TestBed.createComponent(MonPremierComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
