import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { SegonCompComponent } from './segon-comp.component';

describe('SegonCompComponent', () => {
  let component: SegonCompComponent;
  let fixture: ComponentFixture<SegonCompComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SegonCompComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SegonCompComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
